<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Blocks extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('blocks_model', 'blocks');
    }

    public function product($id)
    {
        $data['products'] = $this->blocks->get_one($id);
        $data['block'] = $this->blocks->get_block_info($id);
        $this->load->view('blocks/index', $data);
    }



    public function cart_add()
    {
        echo "<pre>";
        var_dump($this->input->post());
        //$this->session->block = 
    }

}