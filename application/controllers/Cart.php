<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

    public function index()
    {
        if ($this->ion_auth->logged_in())
        {

            if ( ! empty($this->session->products)) 
            {
                $this->load->model('cart_model', 'cart');

                $data['products'] = $this->session->products;
                $data['username'] = $this->ion_auth->user()->row()->username;
                $data['sum'] = (isset($this->session->sum)) ? $this->session->sum : 0;
                $data['settlements'] = $this->cart->get_settlements();
                $this->load->view('header');
                $this->load->view('cart/index', $data);
                $this->load->view('footer');
            }
            else
            {
                $this->load->view('header');
                $this->load->view('cart/empty_basket');
                $this->load->view('footer');

            }
        }
        else
        {
            redirect('/auth/must_registr');
            die;
        }
    }

    public function clear_data($id)
    {
        $session_items = ['products', 'sum'];
        $this->session->unset_userdata($session_items);
        redirect('/cabinet/task/' . $id);
    }

    public function order()
    {
        if ($this->ion_auth->logged_in()) 
        {

            $this->load->model('cart_model', 'cart');
            $settlement_id = $this->input->post('settlement_id');

            $settlement = 
                $this->cart->get_one_settlement($settlement_id)[0]['name'];

            $crane = $this->input->post('crane');
            $delivery_cost = 0;
            $pallets = 0;
            if ( ! empty($this->session->products) && !empty($this->input->post()) && isset($this->session->sum))
            {
                // check date
             
                if( $crane != 2 ) {

                    $interval = new DateInterval('P2D');

                    $dateInterval = new DateTime;
                    $dateInterval->add($interval);
                    $dateTwo = $dateInterval->format('Y-m-d');

                    $deliver = $this->input->post('delivery_date');
                    $dateD = new DateTime($deliver);
                    $dateD = $dateD->format('D');

                    if( $dateTwo == $deliver || $dateTwo > $deliver || $dateD == 'Sat' || $dateD == 'Sun' ) {

                        die(
                            'Доставка осуществляется только в рабочие дни и не раньше 2-х дней со дня заказа.'
                            );

                    } 
                    
                    $min_pallets = 8;
                    $price_for_one_pallet = '450';
                    if( $crane == '0') {
                        $price_for = 'without_crane';
                        $max_pallets = 20;
                    } else {
                        $price_for = 'with_crane';
                        $max_pallets = 10;
                    }

                    for ($i = 0; $i < count($this->session->products);  $i++) {
                        $product_id = $this->session->products[$i]['id'];

                        $on_one_pallet = $this->cart->get_pallets($product_id)[0]['pallets'];
                        $amount_produts = $this->session->products[$i]['amount'];

                        $pallets += ceil($amount_produts / $on_one_pallet);
                        /*if( $pallets > $max_pallets) {
                            die('Максимальное число товара на 1 заказ:' . 
                                $on_one_pallet * $max_pallets);
                        }*/
                        if( $pallets < $min_pallets) {
                            $pallets = 8;
                        }
                        
                        $block_id = 
                        ($this->session->products[0]['block_id'] <= 5) ? $this->session->products[0]['block_id'] : 1;
                        $block_amount = $this->session->products[$i]['amount'];
                        $data[$i] = $this->cart->get_delivery_cost($settlement_id, $block_id, $price_for); 
                        
                        $delivery_cost += 
                            $data[$i][0][$price_for] * $block_amount;
                    }
                } 
                $pallets_delivery_cost = 
                    $price_for_one_pallet * $pallets + $delivery_cost;


                $order_data = $this->generic->get_post('street, crane, delivery_date, payment_type');

                $order_data['sum'] = $this->session->sum;
                $order_data['user_id'] = $this->ion_auth->user()->row()->id;
                $order_data['is_active'] = 1;
                $order_data['is_done'] = 0;
                $order_data['order_date'] = date('Y:m:d H:i:s');
                $order_data['delivery_cost'] =  $pallets_delivery_cost;
                $order_data['number_of_pallets'] = $pallets;
                $order_data['settlement'] = $settlement;
                $order_id = $this->cart->order_data($order_data);


                $products = $this->session->products;
                foreach ($products as $key => &$value) {
                    $value['product_id'] = $value['id'];
                    $value['order_id'] = $order_id;
                    $this->session->unset_userdata('count');
                    unset($value['id']);
                }

                if ($this->cart->order_products($products))
                {
                    $id = $this->cart->last_order();
                    $this->clear_data($id[0]['id']);
                }
                else
                {
                    echo "exception";
                }
            }
            else { 
                echo "exception";
            }
        }
        else
        {
            redirect('/auth/permission');
            die;
        }
    }
    
}
