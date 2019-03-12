<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
class jobupdate extends CI_Controller {

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
	$id=$this->input->get('id');
	$this->load->database();
	$this->db->where('job_id',$id);
	$query=$this->db->get('job');
	$showdata['jobdata']=$query->result_array();
	$this->load->view('jobupdate',$showdata);
  }
  
 public function jobupdate()
 {
 	$data=array
	(
		'title'=>$this->input->post('job_title'),
		'Post_desc'=>$this->input->post('job_desc')
	);
	$this->load->database();
	$id1=$this->input->get('id');
	$this->db->set('job_title',$data['title']);
	$this->db->set('job_desc',$data['Post_desc']);
	$this->db->where('job_id',$id1);
	$this->db->update('job');
	redirect("http://localhost/abc/index.php/job",'refresh');
 }
}
?>