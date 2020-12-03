<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_Model extends CI_Model
{
	public function getTypeMenu($id = null)
	{
		if ($id === null) {
			$this->db->select('*');
			$this->db->from('menu_types');
			$this->db->order_by('type_id', 'RANDOM');
			return $this->db->get()->result_array();
		} else {
			return $this->db->get_where('menu_types', ['type_id' => $id])->row();
		}
	}

	public function getMenu($id = null)
	{
		if ($id === null) {
			$this->db->select('m.*, t.name as type');
			$this->db->from('menus as m');
			$this->db->join('menu_types as t', 'm.type_id = t.type_id', 'LEFT');
			$this->db->order_by('menu_id', 'RANDOM');
			return $this->db->get()->result_array();
		} else {
			return $this->db->get_where('menus', ['type_id' => $id])->result_array();
		}
	}

	public function fetchData($name)
	{
		$actualName = str_replace("_", " ", $name);

		$this->db->select('menu_id, price');
		$this->db->from('menus');
		$this->db->where('name', $actualName);
		return $this->db->get()->row_array();
	}

	public function history()
	{
		$this->db->select('order_id, o.total_payment total, m.name name, m.price price, o.amount amount,  t.name category');
		$this->db->from('orders o');
		$this->db->join('menus m', 'o.menu_id = m.menu_id', 'LEFT');
		$this->db->join('menu_types t', 'm.type_id = t.type_id', 'LEFT');
		$this->db->order_by('order_id', 'DESC', true);
		return $this->db->get()->result_array();
	}

	public function getStatistics()
	{
		$this->db->select('SUM(IF(DAY(created_at)=(DAY(CURRENT_DATE()) -1), total_payment, 0)) lastDay,
		SUM(IF(DAY(created_at)=DAY(CURRENT_DATE()), total_payment, 0)) daily, 
		SUM(IF(MONTH(created_at)=(MONTH(CURRENT_DATE()) -1), total_payment, 0)) lastMonth,
		SUM(IF(MONTH(created_at)=MONTH(CURRENT_DATE()), total_payment, 0)) monthly, 
		COUNT(order_id) amount, SUM(total_payment) total');
		$this->db->from('orders');
		return $this->db->get()->row_array();
	}

	public function getDateforChart()
	{
		$this->db->select('MONTHNAME(created_at) as month, SUM(IF(MONTH(created_at)=MONTH(created_at) , total_payment, 0)) as revenue');
		$this->db->from('orders');
		$this->db->group_by('month');
		$this->db->order_by('order_id', 'DESC');
		return $this->db->get()->result_array();
	}
}
