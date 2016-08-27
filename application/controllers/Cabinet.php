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
        $this->user_id = ($this->ion_auth->logged_in()) ? $this->ion_auth->user()->row()->id : FALSE;
    }

    public function index()
    {
        $this->all_orders();
    }

    public function all_orders()
    {
        if ($this->ion_auth->logged_in())
        {
            $page = $this->uri->segment(3);
            $config = [
                'base_url' => base_url() . '/cabinet/all_orders',
                'per_page' => '10',
                'use_page_numbers' => TRUE
            ];

            if ($this->ion_auth->is_admin())
            {
                $config['total_rows'] = $this->cabinet->count_free_orders();
                $data['orders'] = $this->cabinet->get_all_orders($config['per_page'], $page);
                $data['is_admin'] = TRUE;
            }
            else
            {
                $config['total_rows'] = $this->cabinet->count_user_orders($this->user_id);
                $data['orders'] = $this->cabinet->get_all_orders($config['per_page'], $page, $this->user_id);
                $data['is_admin'] = FALSE;
            }

            $this->pagination->initialize($config);   

            if(empty($data['orders'])) 
            {
                echo "Пусто";
            }

            $this->load->view('header');
            $this->load->view('cabinet/all_orders', $data);
            $this->load->view('footer');
        }
        else
        {
            redirect('/auth/permission');
            die;
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

            
            if(empty($data['orders'])) 
            {
                echo "Пусто";
            }

            $this->load->view('header');
            $this->load->view('cabinet/my_orders', $data);
            $this->load->view('footer');
        }
        else
        {
            redirect('/auth/permission');
            die;
        }
    }

    public function archive()
    {

        if ($this->ion_auth->logged_in())
        {
            $user_id = $this->user_id;

        	$page = $this->uri->segment(3);
        	$config = [
        		'base_url' => base_url() . '/cabinet/archive',
        		'per_page' => '10',
        		'use_page_numbers' => TRUE
        	];

            if ($this->ion_auth->is_admin()) 
            {
                $config['total_rows'] = $this->cabinet->count_manager_done_orders($user_id);
                $data['is_admin'] = TRUE;
            }
            else
            {
                $config['total_rows'] = $this->cabinet->count_user_done_orders($user_id);
                $data['is_admin'] = FALSE;
            }



        	$this->pagination->initialize($config);

        	$data['orders'] = ($this->ion_auth->is_admin()) ? $this->cabinet->get_manager_orders($config['per_page'], $page, $user_id, TRUE) : $this->cabinet->get_user_done_orders($config['per_page'], $page, $user_id);


        	if(empty($data['orders'])) 
        	{
        		echo "Пусто";
        	}

        	$this->load->view('header');
        	$this->load->view('cabinet/all_orders', $data);
        	$this->load->view('footer');
        }
        else
        {
            redirect('/auth/permission');
            die;
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
        else
        {
            redirect('/auth/permission');
            die;
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
        else
        {
            redirect('/auth/permission');
            die;
        }
    }

    

    public function task($id)
    {
        if ($this->ion_auth->is_admin() || $this->user_id == $this->cabinet->user_id_task($id)->user_id)
        {
            $data['order'] = $this->cabinet->get_one_order($id);
            $data['products'] = $this->cabinet->get_products_by_order_id($id);
            $data['username'] = $this->ion_auth->user()->row()->username;
            $data['is_taken'] = ($data['order']->manager_id == $this->user_id) ? 1 : 0;
            $data['is_admin'] = ($this->ion_auth->is_admin()) ? TRUE : FALSE;
            

            $this->load->view('header');
            $this->load->view('cabinet/cabinet', $data);
            $this->load->view('footer');
        }
        else
        {
            redirect('/auth/permission');
            die;
        }
    }

    public function change_additional_data()
    {
        if ($this->ion_auth->is_admin() && $this->input->is_ajax_request()) 
        {
            $task_id = $this->input->post('task_id');
            $additional_data = $this->generic->get_post('paid, blocks_left, blocks_shipped, pallets_left, pallets_shipped');

            if ($this->cabinet->insert_additional_data($task_id, $additional_data)) {
                echo json_encode(['status' => 200]);
            }
        }
        else
        {
            redirect('/auth/permission');
            die;
        }
    }


    //Для выдачи счета(квитанции)
    public function blank() {
        $this->load->view('blank');
    }

    public function dateList() {

        $interval = new DateInterval('P2D');

        $dateInterval = new DateTime;
        $dateInterval->add($interval);
        $dateTwo = $dateInterval->format('Y-m-d');

        $deliver = $this->input->post('date');

        $dateD = new DateTime($deliver);
        $dateD = $dateD->format('D');
        if($dateTwo == $deliver || $dateTwo > $deliver || $dateD == 'Sat' || $dateD == 'Sun') {
            echo "Доставка осуществляется только в рабочие дни и не раньше 2-х дней со дня заказа.";
        } else {
            echo 'Доставка осуществится: ' . $deliver;
        }

        $this->load->view('test');
    }

}