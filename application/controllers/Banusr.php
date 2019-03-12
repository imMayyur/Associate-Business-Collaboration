<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banusr extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->helper(array('url'));
}

public function index()
 {
  	$this->load->helper(array('url'));
	$this->load->library('form_validation');
	$this->load->database();
	$Status=$this->input->get('status');
	$uid=$this->input->get('uid');
	if($Status=='Active')
	{
		$this->db->set('Status','Deactive');
		$this->db->where('User_id',$uid);
		$this->db->update('Signup');
		redirect("http://localhost/abc/index.php/Manageusr",'refresh');
	}
	else
	{
		$this->db->set('Status','Active');
		$this->db->where('User_id',$uid);
		$this->db->update('Signup');
		redirect("http://localhost/abc/index.php/Manageusr",'refresh');
	}
 }
}