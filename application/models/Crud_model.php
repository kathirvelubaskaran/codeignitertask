<?php

class Crud_model extends CI_Model {

	function saverecords($data) {
		$this->db->insert('product', $data);
		return true;
	}

	function savegenric($table, $data) {
		$this->db->insert($table, $data);
		return $this->db->insert_id();
	}

	function fetchrecords() {
		$this->db->select('*');
		$this->db->where('status', 1);
		$query = $this->db->get('product');

		return $query->result_array();
	}

	function getRows($id) {
		$this->db->select('*');
		$this->db->where('status', 1);
		$this->db->where('id', $id);
		$query = $this->db->get('product');

		return $query->result_array();
	}

}