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
    
    public function order_status($data)
    {
    	return $this->db->insert('ordered_status', $data);
    }

    
}
