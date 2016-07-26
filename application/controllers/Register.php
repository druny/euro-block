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
            $this->load->view('register/index');
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