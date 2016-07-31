<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

    public function index()
    {
    	$this->load->view('header');
    	$this->load->view('cart/index');
    	$this->load->view('footer');
    }
}
