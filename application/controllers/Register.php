<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Registration Class
*/
class Register extends CI_Controller
{
    public function index()
    {
        if ( ! $this->ion_auth->logged_in())
        {
            if ($this->form_validation->run('register') == FALSE)
            {
                $data['cart_count'] = ( ! empty($this->session->products)) ? count($this->session->products) : 0;
                $this->load->view('header', $data);
                $this->load->view('register/index');   
                $this->load->view('footer');        
            }
            else
            {
                $identity = $this->input->post('identity');
                $password = $this->input->post('password');
                $email = strtolower($this->input->post('email'));
                $additional_data = [
                    'first_name' => $this->input->post('first_name'),
                    'last_name'  => $this->input->post('last_name'),
                    'company'    => $this->input->post('company'),
                    'phone'      => $this->input->post('phone'),
                ];
                if ($this->ion_auth->register($identity, $password, $email, $additional_data)) {
                    redirect('/');
                }
                else
                {
                    echo "Что-то пошло не так";
                }
            }
        }
        else
        {
            redirect('/');
            die;
        }
    }
}