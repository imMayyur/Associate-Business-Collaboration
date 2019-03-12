<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class job extends CI_Controller {
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
	$id=$this->session->userdata('uid');
	$this->load->database();
	$this->db->where('User_id',$id);
	$query=$this->db->get('job');
	$data['jobdata']=$query->result_array();
  	$this->load->view('job',$data);
  }
 public function insert()
  {
		$this->load->database();
		$this->load->library('session');
		$id=$this->session->userdata('uid');
		$data_to_store=array('job_title'=>$this->input->post('job_title'),
							 'job_desc'=>$this->input->post('job_desc'),
							 'User_id'=>$id
							 );
		$insert=$this->db->insert('job',$data_to_store);
		redirect('http://localhost/abc/index.php/job','refresh');
  }
  }