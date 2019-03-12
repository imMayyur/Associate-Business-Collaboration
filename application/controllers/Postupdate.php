<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
class Postupdate extends CI_Controller {

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
	$this->db->where('Post_id',$id);
	$query=$this->db->get('posting');
	$showdata['postdata']=$query->result_array();
	$this->load->view('Postupdate',$showdata);
  }
  
 public function postupdate()
 {
 	$data=array
	(
		'title'=>$this->input->post('title'),
		'status'=>$this->input->post('status'),
		'Post_desc'=>$this->input->post('postdesc')
	);
	$this->load->database();
	$this->db->set('Title',$data['title']);
	$this->db->set('Status',$data['status']);
	$this->db->set('Post_desc',$data['Post_desc']);
	$this->db->where('Post_id',$this->input->post('postid'));
	$this->db->update('Posting');
	redirect("http://localhost/abc/index.php/Post",'refresh');
 }
}
?>