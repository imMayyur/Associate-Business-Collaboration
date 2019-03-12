<?php
	class Category_Model extends CI_Model
	{
		public function __construct()
	{
		$this->load->database();
	}
	function getcategory()
	{
		$query=$this->db->get('category');
		return $query->result_array();
	}
	}
?>