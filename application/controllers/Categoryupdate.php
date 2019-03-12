<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
class Categoryupdate extends CI_Controller {

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
	if(!$this->session->userdata('aid'))
	{
		redirect('http://localhost/abc/index.php/Admlogin','refresh');
	}
	$id=$this->input->get('id');
	$this->load->database();
	$this->db->where('cat_id',$id);
	$query=$this->db->get('category');
	$showdata['catdata']=$query->result_array();
	$this->load->view('Categoryupdate',$showdata);
  }
  
 public function updatecategory()
 {
 	$data=array
	(
		'cat_name'=>$this->input->post('catname'),
		'Cat_desc'=>$this->input->post('cdesc')
	);
	$this->load->database();
	$this->db->set('cat_name',$data['cat_name']);
	$this->db->set('Cat_desc',$data['Cat_desc']);
	$this->db->where('cat_id',$this->input->post('catid'));
	$this->db->update('category');
	redirect("http://localhost/abc/index.php/Category",'refresh');
 }
}
?>