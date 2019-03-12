<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admlogin extends CI_Controller {

public function index()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->view('Admlogin');
	}
public function Login()
  {
  	$this->load->helper(array('form','url'));
	$this->load->database();
	$this->db->from('admin');
	$this->db->where('Name',$this->input->post('uname'));
	$this->db->where('Password',$this->input->post('pwd'));
	$query=$this->db->get();
	if($query->num_rows()==1)
	{
		$this->load->library('session');
		$data['admin']=$query->result_array();
		$this->session->set_userdata('aid',$this->input->post('uname'));
		redirect('http://localhost/abc/index.php/manageusr','refresh');
	}
	else
	{
		redirect('http://localhost/abc/index.php/admlogin/?id=1','refresh');
	}
	}
}
