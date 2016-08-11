<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Cabinet extends CI_Controller
{

    public $user_id;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cabinet_model', 'cabinet');
        $this->load->library('pagination');
        $this->user_id = $this->ion_auth->user()->row()->id;
    }

    public function index()
    {
        $this->all_orders();
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
            $manager_id = $this->user_id;

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

    public function archive()
    {

        if ($this->ion_auth->is_admin())
        {
            $manager_id = $this->user_id;

        	$page = $this->uri->segment(3);
        	$config = [
        		'base_url' => base_url() . '/cabinet/my_orders',
        		'total_rows' => $this->cabinet->count_manager_done_orders($manager_id),
        		'per_page' => '10',
        		'use_page_numbers' => TRUE
        	];
        	$this->pagination->initialize($config);

        	$data['orders'] = $this->cabinet->get_manager_orders($config['per_page'], $page, $manager_id, TRUE);

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
            if ($this->cabinet->order_task($task_id, $this->user_id)) {
                redirect('/cabinet/task/' . $task_id);
            }
            else
            {
                echo "exception";
            }
        }
    }

    public function complete_task($task_id)
    {
        if ($this->ion_auth->is_admin() && $this->user_id == $this->cabinet->manager_id_task($task_id)->manager_id)
        {
            if ($this->cabinet->finish_task($task_id, $this->user_id)) {
                redirect('/cabinet/task/' . $task_id);
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
        $data['is_taken'] = ($data['order']->manager_id == $this->user_id) ? 1 : 0;
        $count['cart_count'] = ( ! empty($this->session->products)) ? count($this->session->products) : 0;

        $this->load->view('header', $count);
        $this->load->view('cabinet/cabinet', $data);
        $this->load->view('footer');
    }

    public function change_additional_data()
    {
        $task_id = $this->input->post('task_id');
        $additional_data = $this->generic->get_post('paid, blocks_left, blocks_shipped, pallets_left, pallets_shipped');

        if ($this->cabinet->insert_additional_data($task_id, $additional_data)) {
            echo json_encode(['status' => 200]);
        }
    }

}