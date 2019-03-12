<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Fpwd2 extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
	}
	public function index()
	{
		$this->load->library('session');
		$email=$this->session->userdata('femail');
		$this->load->database();
		$query1="select Squestion from signup where Email=?";
		$query=$this->db->query($query1,$email);
		$data['question']=$query->result_array();
		$this->load->view('Fpwd2',$data);	
	}
	public function answer()
	{
		$this->load->library('session');
		$ans=$this->session->set_userdata('answer',$this->input->post('answer'));
		redirect('http://localhost/abc/index.php/answer','refresh');
	}
}