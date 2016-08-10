<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Cabinet extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cabinet_model', 'cabinet');
        $this->load->library('pagination');
    }

    public function index()
    {
        
    }

    public function all_orders()
    {
        if ($this->ion_auth->is_admin())
        {
            $page = $this->uri->segment(3);
            $config = [
                'base_url' => base_url() . '/cabinet/all_orders',
                'total_rows' => $this->cabinet->count_free_orders(),
                'per_page' => '10',
                'use_page_numbers' => TRUE
            ];
            $this->pagination->initialize($config);

            $data['orders'] = $this->cabinet->get_all_orders($config['per_page'], $page);

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

    public function my_orders()
    {

        if ($this->ion_auth->is_admin())
        {
            $manager_id = $this->ion_auth->user()->row()->id;

        	$page = $this->uri->segment(3);
        	$config = [
        		'base_url' => base_url() . '/cabinet/my_orders',
        		'total_rows' => $this->cabinet->count_manager_orders($manager_id),
        		'per_page' => '10',
        		'use_page_numbers' => TRUE
        	];
        	$this->pagination->initialize($config);

        	$data['orders'] = $this->cabinet->get_manager_orders($config['per_page'], $page, $manager_id);

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

    public function take_task($task_id)
    {
        if ($this->ion_auth->is_admin())
        {
            if ($this->cabinet->order_task($task_id, $this->ion_auth->user()->row()->id)) {
                redirect('/cabinet/my_orders');
            }
            else
            {
                echo "exception";
            }
        }
    }

    public function task($id)
    {
        $data['order'] = $this->cabinet->get_one_order($id);
        $data['products'] = $this->cabinet->get_products_by_order_id($id);
        $data['username'] = $this->ion_auth->user()->row()->username;
        $count['cart_count'] = ( ! empty($this->session->products)) ? count($this->session->products) : 0;

        $this->load->view('header', $count);
        $this->load->view('cabinet/cabinet', $data);
        $this->load->view('footer');
        
    }

}