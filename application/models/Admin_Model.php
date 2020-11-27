<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Admin_Model extends CI_Model
	{
		public function getTypeMenu($id = null) {
			if ($id === null) {
				return $this->db->get('menu_types')->result_array();
			} else {
				return $this->db->get_where('menu_types', ['type_id' =>$id])->row();
			}
		}
		
		public function getMenu($id = null) {
			if ($id === null) {
				$this->db->select('m.*, t.name as type');
				$this->db->from('menus as m');
				$this->db->join('menu_types as t', 'm.type_id = t.type_id', 'LEFT');
				return $this->db->get()->result_array();
			} else {
				return $this->db->get_where('menus', ['menu_id' => $id])->row();
			}
		}

		public function history() {
			$this->db->select('o.amount as amount, o.total_payment as total, m.name as name, m.price as price, t.name as category');
			$this->db->from('orders as o');
			$this->db->join('menus as m', 'o.menu_id = m.menu_id', 'LEFT');
			$this->db->join('menu_types as t', 'm.type_id = t.type_id', 'LEFT');
			return $this->db->get()->result_array();
		}
	}
