<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sending extends CI_Controller {

	function index()
	{
		echo  $this->input->post('email');
		$this->load->view('header');
		$this->load->view('send/formsuccess');
		$this->load->view('footer');
			
	}
	
}