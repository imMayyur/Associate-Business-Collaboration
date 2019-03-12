<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Groupusers extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->helper(array('url'));
	
}
public function index()
{
  	$this->load->helper(array('form', 'url'));
	$this->load->library('form_validation');
	$this->load->library('session');
	if(!$this->session->userdata('uid'))
	{
		redirect('http://localhost/abc/index.php/usrlogin','refresh');
	}
	$this->load->library('session');
	$uid=$this->session->userdata('uid');
	$gid=$this->input->get('id');
	$this->load->database();
	$query1="SELECT groups_user.*,signup.User_name from signup join groups_user on groups_user.User_id=signup.User_id where groups_user.Status='Active' and groups_user.Group_id=?";
	$query=$this->db->query($query1,$gid);
	$data['Groupusers']=$query->result_array();
  	$this->load->view('Groupusers',$data);
}
public function insert()
{
		$this->load->database();
		
		redirect('Groupusers','refresh');
}
}