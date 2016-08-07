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
    
}
