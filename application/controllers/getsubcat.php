<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class getsubcat extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
	}
	public function index()
	{
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		$this->load->library('session');
	
		$this->load->database();
		$query1 = "select * from subcategory where Cat_id=".$this->input->post('id');
		$query=$this->db->query($query1);
		$data['subcate']=$query->result_array();
		$this->load->view('getsubcat',$data);
	}
	
	
}
?>