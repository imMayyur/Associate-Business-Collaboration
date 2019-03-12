<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class grouppost extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->helper(array('url'));
}
public function index()
 {
  	$this->load->helper(array('url'));
	$this->load->library('form_validation');
	$this->load->library('session');
	if(!$this->session->userdata('uid'))
	{
		redirect('http://localhost/abc/index.php/usrlogin','refresh');
	}
	$this->load->database();
  	$this->load->view('grouppost');
  }
 public function insert()
  {
  	$this->load->library('form_validation');
	if($this->form_validation->run()==FALSE)
	{
		$this->load->view('groupost');
	}
	else
	{
		redirect('http://localhost/abc/index.php/grouppost','refresh');
  		//$this->load->view('Success');
	}
  }
  }
 ?>