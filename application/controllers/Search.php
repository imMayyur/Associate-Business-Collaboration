<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class search extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->helper(array('url'));
}

public function index()
 {
  	$this->load->helper(array('form', 'url'));
	$this->load->library('session');
	if(!$this->session->userdata('uid'))
	{
		redirect('http://localhost/abc/index.php/usrlogin','refresh');
	}
	$this->load->view('search');
  }
 public function search()
  {
  	$this->load->library('form_validation');
	$this->form_validation->set_rules('search','search','required');
	if($this->form_validation->run()==FALSE)
	{
		$this->load->view('Search');
	}
	else
	{
		$this->load->database();
		$this->load->library('session');
		$uid=$this->session->userdata('uid');
		$gname=$this->input->post('search');	
		redirect('http://localhost/abc/index.php/Groupsearch?id='.$gname);

	}
  }
  }