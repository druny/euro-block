<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_model extends CI_Model {

    public function order_data($data)
    {
        $this->db->insert('orders', $data);
        return $this->db->insert_id();
    }

    public function order_products($products)
    {
        return $this->db->insert_batch('ordered_products', $products);
    }
    public function last_order() {
    	 $this->db->select('id');
    	 $this->db->order_by('id', 'desc');
    	 $this->db->limit(1);
    	return $this->db->get('orders')->result_array();
    }

    public function get_settlements() {
        return $this->db->get('settlements')->result_array();
    }

    public function get_one_settlement($id) {
        $this->db->where('id', $id);
        return $this->db->get('settlements')->result_array();
    }

    public function get_pallets($product_id) {
        $this->db->select('pallets');
        $this->db->from('products');
        $this->db->where('id', $product_id);
        return $this->db->get()->result_array();
    }
    
    public function get_delivery_cost($settlement_id, $block_id, $crane) {

        $this->db->select($crane);
        $this->db->from('blocks_settlements');
        $this->db->join(
                'settlements', 
                'settlements.id = blocks_settlements.settlement_id' 
            );
        $this->db->join('blocks', 'blocks.id = blocks_settlements.block_id');
        $this->db->where('blocks_settlements.settlement_id', $settlement_id);
        $this->db->where(
                'blocks_settlements.block_id', $block_id
            );
        return $this->db->get()->result_array();
    }
}
