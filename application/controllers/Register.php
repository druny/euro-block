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
            if ($this->form_validation->run('register_individual') == FALSE)
            {
                $data['ownership_types'] = $this->db->get('type_of_ownership')->result();
                $data['member_types'] = $this->db->get('members_type')->result();

                $this->load->view('header');
                $this->load->view('register/index', $data);   
                $this->load->view('footer');        
            }
            else
            {
                    $identity = strtolower($this->input->post('email'));
                    $password = $this->input->post('password');
                    $email = strtolower($this->input->post('email'));
                    $additional_data = [
                        'first_name'         => $this->input->post('first_name'),
                        'last_name'          => $this->input->post('last_name'),
                        'passport'           => $this->input->post('passport'),
                        'registration_place' => $this->input->post('registration_place'),
                        'phone'              => $this->input->post('phone'),
                        'issued_by'          => $this->input->post('issued_by'),
                        'member_type'        => (int) $this->input->post('member_type')
                    ];

                if ($this->ion_auth->register($identity, $password, $email, $additional_data)) {
                    $this->ion_auth->login($identity, $password);
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

    public function register_organization()
    {
        if ( ! $this->ion_auth->logged_in())
        {
            if ($this->form_validation->run('register_organization') == FALSE)
            {
                $data['ownership_types'] = $this->db->get('type_of_ownership')->result();
                $data['member_types'] = $this->db->get('members_type')->result();
                
                $this->load->view('header');
                $this->load->view('register/index', $data);   
                $this->load->view('footer');        
            }
            else
            {
                    $identity = strtolower($this->input->post('email'));
                    $password = $this->input->post('password');
                    $email = strtolower($this->input->post('email'));
                    $additional_data = [
                        'first_name'         => $this->input->post('first_name'),
                        'last_name'          => $this->input->post('last_name'),
                        'company'            => $this->input->post('company'),
                        'ownership_type'     => (int) $this->input->post('ownership_type'),
                        'legal_address'      => $this->input->post('legal_address'),
                        'phone'              => $this->input->post('phone'),
                        'inn'                => (int) $this->input->post('inn'),
                        'kpp'                => (int) $this->input->post('kpp'),
                        'member_type'        => (int) $this->input->post('member_type')
                    ];
                

                if ($this->ion_auth->register($identity, $password, $email, $additional_data)) {
                    $this->ion_auth->login($identity, $password);
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