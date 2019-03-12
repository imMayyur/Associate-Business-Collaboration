<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usrlogin extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->helper(array('url'));
}
public function index()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->view('Usrlogin');
	}
public function Login()
  {
  	$this->load->helper(array('form','url'));
	$this->load->database();
	$this->db->from('signup');
	$this->db->where('User_name',$this->input->post('uname'));
	$this->db->where('Password',$this->input->post('pwd'));
	$this->db->where('Status','Active');
	$query=$this->db->get();
	if($query->num_rows()==1)
	{
		$this->load->library('session');
		$data['users']=$query->result_array();
		foreach($data['users'] as $row)
		{
	
		$this->session->set_userdata('User',$this->input->post('uname'));
		$this->session->set_userdata('uid',$row['User_id']);
		$this->session->set_userdata('email',$row['Email']);
		redirect('http://localhost/abc/index.php/usrindex','refresh');
		}
	}
	else
	{
		redirect('http://localhost/abc/index.php/Usrlogin','refresh');
	}
	}
}
