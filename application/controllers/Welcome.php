<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
        $data['cart_count'] = ( ! empty($this->session->products)) ? count($this->session->products) : 0;
		$this->load->view('index', $data);
		$this->load->view('footer');
	}
}