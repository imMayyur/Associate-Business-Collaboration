<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {
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
	$query=$this->db->get('posting');
	$data['posting']=$query->result_array();
  	$this->load->view('Post',$data);
  }
 public function insert()
  {
  	$this->load->library('form_validation');
	$this->form_validation->set_rules('title','title','required');
	$this->form_validation->set_rules('postdesc','postdesc','required');
	if($this->form_validation->run()==FALSE)
	{
		$this->load->view('Post');
	}
	else
	{
		$this->load->database();
		$this->load->library('session');
		$uid=$this->session->userdata('uid');
		$data_to_store=array('Title'=>$this->input->post('title'),
							 'Status'=>$this->input->post('status'),
							 'Post_desc'=>$this->input->post('postdesc'),
							 'User_id'=>$uid
							 );
		$insert=$this->db->insert('Posting',$data_to_store);
		redirect('http://localhost/abc/index.php/post','refresh');

	}
  }
  }