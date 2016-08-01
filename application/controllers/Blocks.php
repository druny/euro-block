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
        $sum = 0;

        foreach ($data as &$value) {
            $value['amount'] = $amount[$value['id']];
            $value['total_price'] = $value['amount'] * $value['price'];
            $sum += $value['total_price'];
        }

        if ( ! isset($this->session->products) )
        {
            $this->session->products = $data;
            $this->session->sum = $sum;
        }
        else
        {
            $i = 0;
            $current_sum = 0;
            $products = $this->session->products;

            foreach ($products as &$product) {
                //if ($product['name'] === $data[$i]['name'])
                if (isset($data[$i]) && $product['name'] === $data[$i]['name'])
                {
                    $product['amount'] += $data[$i]['amount'];
                    $product['total_price'] += ($data[$i]['amount'] * $product['price']);
                    $i++;
                }
            
                $current_sum += $product['total_price'];
            }

            if ($i === 0)
            {
                // TODO: Расчитать сумму для элементов которых еще нет в сессии
                $this->session->products = array_merge($products, $data);
                $this->session->sum += $sum;
            }
            else
            {
                $this->session->products = $products;
                $this->session->sum = $current_sum;
            }
        }

        redirect('/cart');
        die;
    }


}