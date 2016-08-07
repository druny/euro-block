<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Blocks_model extends CI_Model
{
    public $products_id = [];

    public function get_one($id)
    {
        $this->db->select('products.id, products.name, products.price');
        $this->db->join('blocks', 'blocks.id = products.block_id', 'left');
        return $this->db->get_where('products', ['products.block_id' => $id])->result();
    }

    public function get_block_info($id)
    {
        return $this->db->get_where('blocks', ['id' => $id])->row();
    }

    public function prepare_data($post)
    {
        //$block_id = $post['block_id'];
        foreach ($post as $k => $v) {
            if (strpos($k, 'product_') === 0)
            {
                $substring = str_replace('product_', '', $k);
                $this->products_id[] = $substring;
                $data[$substring] = $v;
            }
        }
        return $data;
    }

    public function get_products_by_id($products_id)
    {
        $this->db->select('
            products.id AS id,
            products.name AS name,
            products.price AS price,
            blocks.name AS block_name
        ');
        $this->db->join('blocks', 'blocks.id = products.block_id', 'left');
        $this->db->where_in('products.id', $products_id);
        return $this->db->get('products')->result_array();
    }
    
}