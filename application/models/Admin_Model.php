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
				$this->db->select('m.*, t.name');
				$this->db->from('menus m');
				$this->db->join('menu_types t', 'm.type_id = t.type_id', 'left');
				return $this->db->get()->result_array();
			} else {
				return $this->db->get_where('menus', ['menu_id' => $id])->row();
			}
		}
	}
