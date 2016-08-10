<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Cabinet_model extends CI_Model
{


	public function get_all_orders($num, $page)
	{
		$db_offset = ($page == 0) ? 0 : ($num * $page) - $num;
		$this->db->select('
			orders.id,
			orders.city,
			orders.sum,
			orders.order_date,
			users.first_name,
			users.last_name
		');
		$this->db->join('users', 'orders.user_id = users.id', 'INNER');
		$this->db->order_by('orders.id', 'DESC');
		$this->db->limit($num, $db_offset);

		$where_clause = [
			'orders.is_active' => '1',
			'orders.is_done'   => '0',
			'orders.manager_id' => NULL
		];
		$this->db->where($where_clause);

		return $this->db->get('orders')->result_array();
	}

	public function get_manager_orders($num, $page, $manager_id)
	{
		$db_offset = ($page == 0) ? 0 : ($num * $page) - $num;
		$this->db->select('
			orders.id,
			orders.city,
			orders.sum,
			orders.order_date,
			users.first_name,
			users.last_name
		');
		$this->db->join('users', 'orders.user_id = users.id', 'INNER');
		$this->db->order_by('orders.id', 'DESC');
		$this->db->limit($num, $db_offset);

		$where_clause = [
			'orders.is_active' => '1',
			'orders.is_done'   => '0',
			'orders.manager_id' => $manager_id
		];
		$this->db->where($where_clause);

		return $this->db->get('orders')->result_array();
	}

	public function order_task($id, $manager_id)
	{
		return $this->db->update('orders', ['manager_id' => $manager_id], ['id' => $id]);
	}

	public function count_free_orders()
	{
		$where_clause = [
			'orders.is_active' => '1',
			'orders.is_done'   => '0',
			'orders.manager_id' => NULL
		];

		$this->db->where($where_clause);
		return $this->db->count_all_results('orders');
	}

	public function count_manager_orders($id)
	{
		$where_clause = [
			'orders.is_active' => '1',
			'orders.is_done'   => '0',
			'orders.manager_id' => $id
		];

		$this->db->where($where_clause);
		return $this->db->count_all_results('orders');
	}

	public function get_one_order($id)
	{
		$this->db->select('
			orders.*,
			users.first_name,
			users.last_name,
			users.company,
			users.phone,
			users.email,
		');
		$this->db->join('users', 'users.id = orders.user_id');
		$this->db->limit(1);
		return $this->db->get_where('orders', ['orders.id' => $id])->row();
	}

	public function get_products_by_order_id($id)
	{
		return $this->db->get_where('ordered_products', ['order_id' => $id])->result();
	}
}