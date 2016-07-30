<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Blocks_model extends CI_Model
{
    public function cart_add()
    {
        
    }

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

    /*public function prepare_data($post)
    {
        foreach ($post as $k => $v) {
            if (strpos($k, 'product_') === 0)
            {
                $product_id = str_replace('sound_', '', $k);
                $products[] = [
                    'sound_id' => $sound_id,
                    'progress_mark_id' => $v
                ];
            }
            else if (strpos($k, 'block_id') === 0)
            {

            }
    }*/
    
}