<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
class Category extends CI_Controller {

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
	$this->load->database();;
	$query=$this->db->get('category');
	$data['category']=$query->result_array();
	$this->load->view('Category',$data);
  }
 public function insert()
  {
  	$this->load->library('form_validation');
	$this->form_validation->set_rules('catname','catname','required');
	$this->form_validation->set_rules('cdesc','cdesc','required');
	if($this->form_validation->run()==FALSE)
	{
		$this->load->view('Category');
	}
	else
	{
		$this->load->database();
		$data_to_store=array('cat_name'=>$this->input->post('catname'),
							 'Cat_desc'=>$this->input->post('cdesc')
							 );
		$insert=$this->db->insert('category',$data_to_store);
  		redirect('http://localhost/abc/index.php/category','refresh');
	}
  }
  }
?>