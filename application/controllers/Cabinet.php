<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Cabinet extends CI_Controller
{
    public function index()
    {
        $data['cart_count'] = ( ! empty($this->session->products)) ? count($this->session->products) : 0;
        $this->load->view('header', $data);
        $this->load->view('cabinet/cabinet');
        $this->load->view('footer');
    }

    public function all_orders()
    {
    	/*I manager*/
    	$this->load->model('Cabinet_model', 'cabinet');
    	$this->load->library('pagination');

    	$page = $this->uri->segment(3);
    	$config = [
    		'base_url' => base_url() . '/cabinet/all_orders',
    		'total_rows' => $this->db->count_all('orders'),
    		'per_page' => '10',
    		'use_page_numbers' => TRUE
    	];
    	$this->pagination->initialize($config);

    	$data['orders'] = $this->cabinet->get_all_orders($config['per_page'],   $page);

    	$count['cart_count'] = ( ! empty($this->session->products)) ? count($this->session->products) : 0;
    	if(empty($data['orders'])) 
    	{
    		echo "Пусто";
    	}

    	$this->load->view('header', $count);
    	$this->load->view('cabinet/all_orders', $data);
    	$this->load->view('footer');

    }
}