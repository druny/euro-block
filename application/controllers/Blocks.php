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
        $amount = $this->blocks->prepare_data($this->input->post());
        $data = $this->blocks->get_products_by_id($this->blocks->products_id);
        foreach ($data as &$value) {
            $value['amount'] = $amount[$value['id']];
            $value['total_price'] = $value['amount'] * $value['price'];
        }
        $this->session->products = $data;
        echo "<pre>";
        var_dump($this->session->products);
        die;
        $this->load->view('cart/index');
    }


}