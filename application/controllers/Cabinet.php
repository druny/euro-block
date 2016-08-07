<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Cabinet extends CI_Controller
{
    public function index()
    {
        $data['cart_count'] = ( ! empty($this->session->products)) ? count($this->session->products) : 0;
        $this->load->view('header', $data);
        $this->load->view('cabinet/cabinet');
        $this->load->view('footer');
    }
}