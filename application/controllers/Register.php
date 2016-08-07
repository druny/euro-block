<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Registration Class
*/
class Register extends CI_Controller
{
    public function index()
    {
        if ($this->form_validation->run('register') == FALSE)
        {
            $data['cart_count'] = ( ! empty($this->session->products)) ? count($this->session->products) : 0;
            $this->load->view('header');
            $this->load->view('register/index', $data);   
            $this->load->view('footer');        
        }
        else
        {
            $identity = $this->input->post('identity');
            $password = $this->input->post('password');
            $email = $this->input->post('email');
            if ($this->ion_auth->register($identity, $password, $email)) {
                redirect('/');
            }
            else
            {
                echo "Что-то пошло не так";
            }
            
        }
    }
}