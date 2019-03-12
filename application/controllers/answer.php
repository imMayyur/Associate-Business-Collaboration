<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class answer extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->helper(array('url'));
}
public function index()
{
	$this->load->library('session');
	$email=$this->session->userdata('femail');
	$ans=$this->session->userdata('answer');
	$this->load->database();
	$query1="select * from signup where Email='$email' and Sans='$ans'";
	$q2=$this->db->query($query1);
	$data['forgot']=$q2->result_array();
	$this->load->view('answer',$data);
}
}