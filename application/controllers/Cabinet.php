<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Cabinet extends CI_Controller
{
    public function index()
    {
        if ( ! empty($this->session->products)) 
        {
            $data = $this->session->products;
            $this->load->view('cart/test', )
        }
    }
}