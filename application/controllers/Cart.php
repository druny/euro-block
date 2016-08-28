<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

    public function index()
    {
        if ($this->ion_auth->logged_in())
        {

            if ( ! empty($this->session->products)) 
            {
                $data['products'] = $this->session->products;
                $data['username'] = $this->ion_auth->user()->row()->username;
                $data['sum'] = (isset($this->session->sum)) ? $this->session->sum : 0;

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

    public function clear_data()
    {
        $session_items = ['products', 'sum'];
        $this->session->unset_userdata($session_items);
        redirect('/cabinet');
    }

    public function order()
    {
        if ($this->ion_auth->logged_in()) 
        {
            $this->load->model('cart_model', 'cart');

            if ( ! empty($this->session->products) && !empty($this->input->post()) && isset($this->session->sum))
            {
                $order_data = $this->generic->get_post('street, locality, crane, delivery_date, payment_type');
                $order_data['sum'] = $this->session->sum;
                $order_data['user_id'] = $this->ion_auth->user()->row()->id;
                $order_data['is_active'] = 1;
                $order_data['is_done'] = 0;
                $order_data['order_date'] = date('Y:m:d H:i:s');
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
                    $this->clear_data();
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
