<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

    public function index()
    {
        if ( ! empty($this->session->products)) 
        {
            $count['cart_count'] = ( ! empty($this->session->products)) ? count($this->session->products) : 0;
            $data['products'] = $this->session->products;
            $data['sum'] = (isset($this->session->sum)) ? $this->session->sum : 0;

            $this->load->view('header', $count);
            $this->load->view('cart/index', $data);
            $this->load->view('footer');
        }
        else
        {
            echo "Корзина пуста";
        }
    }

    public function clear_data()
    {
        $session_items = ['products', 'sum'];
        $this->session->unset_userdata($session_items);
        redirect('/');
    }

    public function order()
    {
        $this->load->model('cart_model', 'cart');

        if ( ! empty($this->session->products) && !empty($this->input->post()) && isset($this->session->sum))
        {
            $order_data = $this->generic->get_post('city, street, locality, crane, delivery_date, payment_type');
            $order_data['sum'] = $this->session->sum;
            $order_id = $this->cart->order_data($order_data);

            $products = $this->session->products;

            foreach ($products as $key => &$value) {
                $value['product_id'] = $value['id'];
                $value['order_id'] = $order_id;
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
    
}
