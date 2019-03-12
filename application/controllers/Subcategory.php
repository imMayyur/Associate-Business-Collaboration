<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
class Subcategory extends CI_Controller {
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
	$query=$this->db->get('category');
	$data['category']=$query->result_array();
	$query1=$this->db->get('subcategory');
	$data['subcategory']=$query1->result_array();
	$this->load->view('subcategory',$data);
  }
public function insert()
{
  	$this->load->library('form_validation');
		$this->load->database();
		$cat_id=$this->input->post('category');
		$data_to_store=array('Subcat_name'=>$this->input->post('Subcat_name'),
							'Subcat_desc'=>$this->input->post('scdesc'),
							'Cat_id'=>$cat_id
							);
		$insert=$this->db->insert('subcategory',$data_to_store);						
  		redirect('http://localhost/abc/index.php/subcategory','refresh');
	}
} 	