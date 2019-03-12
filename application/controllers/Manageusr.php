<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
class Manageusr extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->helper(array('url'));
	$this->load->model('Category_Model','',TRUE);
}
public function index()
  {
  	$this->load->helper(array('form', 'url'));
	$this->load->library('form_validation');
	$this->load->library('session');
	if(!$this->session->userdata('aid'))
	{
		redirect('http://localhost/abc/index.php/Admlogin','refresh');
	}
	$this->load->database();
	$query=$this->db->get('signup');
	$data['signup']=$query->result_array();
	$this->load->view('manageusr',$data);
  }
  }
?>