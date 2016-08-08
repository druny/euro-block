<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Cabinet_model extends CI_Model
{


	public function get_all_orders()
	{
		$this->db->select('orders.*, ordered_products.*, users.username, 
				users.email, users.phone, users.company, users.first_name, 
				users.last_name');
		$this->db->join('ordered_products', 'orders.id = ordered_products.order_id', 'INNER');
		$this->db->join('users', 'orders.user_id = users.id', 'INNER');
		$this->db->join('ordered_status', 'ordered_status.order_id = orders.id', 'INNER');
		$this->db->where('ordered_status.status_id', '1');
		$query = $this->db->get('orders')->result_array();
		return $query;
	}
}