<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Groupsearch extends CI_Controller {
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
	$gname=$this->input->get('id');
	$this->load->database();
	$this->db->where('Group_name',$gname);
	$query=$this->db->get('Groups');
	$showdata['groupdata']=$query->result_array();
	$this->load->view('Groupsearch',$showdata);
  }
  }