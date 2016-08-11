<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Cabinet_model extends CI_Model
{


	public function get_all_orders($num, $page, $user_id = FALSE)
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
			'orders.is_done'   => '0'
		];

		if ( ! $user_id) {
			$where_clause['orders.manager_id'] = NULL;
		}
		else
		{
			$where_clause['orders.user_id'] = $user_id;
		}
		
		$this->db->where($where_clause);
		return $this->db->get('orders')->result_array();
	}

	/**
	 * This method puts orders of current manager
	 *
	 * @param boolean $is_done This argument determines which orders will be returned.
	 */
	public function get_manager_orders($num, $page, $manager_id, $is_done = FALSE)
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

		if ( ! $is_done) 
		{
			$where_clause = [
				'orders.is_active' => '1',
				'orders.is_done'   => '0',
				'orders.manager_id' => $manager_id
			];
		}
		else
		{
			$where_clause = [
				'orders.is_active' => '0',
				'orders.is_done'   => '1',
				'orders.manager_id' => $manager_id
			];
		}
		
		$this->db->where($where_clause);

		return $this->db->get('orders')->result_array();
	}

	/**
	 * This method puts orders of current manager
	 *
	 * @param boolean $is_done This argument determines which orders will be returned.
	 */
	public function get_user_done_orders($num, $page, $user_id)
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
			'orders.is_active' => '0',
			'orders.is_done'   => '1',
			'orders.user_id' => $user_id
		];
		
		return $this->db->where($where_clause)->get('orders')->result_array();
	}

	public function order_task($id, $manager_id)
	{
		return $this->db->update('orders', ['manager_id' => $manager_id], ['id' => $id]);
	}

	public function finish_task($id, $manager_id)
	{
		$data = [
			'is_active' => 0,
			'is_done'   => 1
		];
		return $this->db->update('orders', $data, ['id' => $id]);
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

	public function count_user_orders($user_id)
	{
		$where_clause = [
			'user_id'   => $user_id,
			'is_active' => 1,
			'is_done'   => 0
		];
		return $this->db->where($where_clause)->count_all_results('orders');
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

	public function count_user_done_orders($id)
	{
		$where_clause = [
			'is_active' => '0',
			'is_done'   => '1',
			'user_id' => $id
		];

		$this->db->where($where_clause);
		return $this->db->count_all_results('orders');
	}

	public function count_manager_done_orders($id)
	{
		$where_clause = [
			'orders.is_active' => '0',
			'orders.is_done'   => '1',
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

	public function insert_additional_data($id, $data)
	{
		// TODO: Make verification for ajax request
		return $this->db->where('id', $id)->update('orders', $data);
	}

	public function manager_id_task($id)
	{
		return $this->db->select('manager_id')
						->where('id', $id)
						->limit(1)
						->get_where('orders', ['id' => $id])
						->row();
	}

}