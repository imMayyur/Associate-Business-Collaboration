<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
class Serviceupdate extends CI_Controller {

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
	$this->db->where('Service_id',$id);
	$query=$this->db->get('Service');
	$showdata['servicedata']=$query->result_array();
	$this->load->view('Serviceupdate',$showdata);
  }
  
 public function serviceupdate()
 {
 	$data=array
	(
		'stitle'=>$this->input->post('title'),
		'status'=>$this->input->post('status'),
		'sdesc'=>$this->input->post('servicedesc')
	);
	$this->load->database();
	$this->db->set('Service_title',$data['stitle']);
	$this->db->set('Status',$data['status']);
	$this->db->set('Service_desc',$data['sdesc']);
	$this->db->where('Service_id',$this->input->post('serviceid'));
	$this->db->update('Service');
	redirect("http://localhost/abc/index.php/Service",'refresh');
 }
}
?>