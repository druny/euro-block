<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sending extends CI_Controller {

	function index()
	{
		$email = $this->input->post('email');
		$name = $this->input->post('name');
		$phone = $this->input->post('phone');

		if(!empty($email) && !empty($name) && !empty($phone))
		{
			$this->load->library('email');
			$this->email->from('druny195@rambler.ru', 'Name');
			$this->email->to($email);
			$this->email->subject('Dear, ' . $name);
			$this->email->message('Fuck You!');
			$this->email->send();

			$this->load->view('header');
			$this->load->view('send/formsuccess');
			$this->load->view('footer');	
		} else {
			$this->load->view('header');
			$this->load->view('send/formnegative');
			$this->load->view('footer');

		}

		
			
	}
	
}