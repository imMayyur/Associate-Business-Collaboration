<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
class Groupupdate extends CI_Controller {

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
	$this->db->where('Group_id',$id);
	$query=$this->db->get('Groups');
	$showdata['groupdata']=$query->result_array();
	$this->load->view('groupupdate',$showdata);
  }
  
 public function groupupdate()
 {
 	$data=array
	(
		'name'=>$this->input->post('grpname'),
		'Group_desc'=>$this->input->post('grpdesc')
	);
	$this->load->database();
	$this->db->set('Group_name',$data['name']);
	$this->db->set('Group_desc',$data['Group_desc']);
	$this->db->where('Group_id',$this->input->post('groupid'));
	$this->db->update('Groups');
	redirect("http://localhost/abc/index.php/Group",'refresh');
 }
}
?>