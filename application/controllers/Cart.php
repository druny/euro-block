<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

    public function index()
    {
        if ( ! empty($this->session->products)) 
        {
            $data['products'] = $this->session->products;
            $data['sum'] = (isset($this->session->sum)) ? $this->session->sum : 0;

            $this->load->view('header');
            $this->load->view('cart/index', $data);
            $this->load->view('footer');
        }
    }
}
