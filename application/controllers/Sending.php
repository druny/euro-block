<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sending extends CI_Controller {

	function index()
	{
		$email = $this->input->post('email');
		$name = $this->input->post('name');
		$phone = $this->input->post('phone');
		$count['cart_count'] = ( ! empty($this->session->products)) ? count($this->session->products) : 0;

		if(!empty($email) && !empty($name) && !empty($phone))
		{
			$config = [
			  'protocol' => 'smtp',
			  'smtp_host' => 'mailtrap.io',
			  'smtp_port' => 2525,
			  'smtp_user' => 'b111d2bd289176',
			  'smtp_pass' => '67dfa6e6daa168',
			  'crlf' => "\r\n",
			  'newline' => "\r\n"
			];
			
			$this->load->library('email');

			$this->email->from('ce333b5ab6-a54134@inbox.mailtrap.io', 'Name');
			$this->email->to($email);
			$this->email->bcc($email); 

			$this->email->subject('Dear, ' . $name);
			$this->email->message('You!');

			$this->email->initialize($config);
			$this->email->send();

			$this->load->view('header', $count);
			$this->load->view('send/formsuccess');
			$this->load->view('footer');	
		} else {
			$this->load->view('header', $count);
			$this->load->view('send/formnegative');
			$this->load->view('footer');

		}	
	}
}