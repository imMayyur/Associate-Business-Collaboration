<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller
{
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
		$id=$this->session->userdata('uid');
		$this->load->database();
		$this->db->where('User_id',$id);
		$query=$this->db->get('service');
		$data['servicedata']=$query->result_array();
	  	$this->load->view('Service',$data);
	}
	public function insert()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title','title','required');
		$this->form_validation->set_rules('servicedesc','servicedesc','required');
		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('Service');
		}
		else
		{
			$this->load->database();
			$this->load->library('session');
			$id=$this->session->userdata('uid');
			$data_to_store=array('Status'=>$this->input->post('status'),
								 'Service_title'=>$this->input->post('title'),
								 'Service_desc'=>$this->input->post('servicedesc'),
								 'User_id'=>$id
								 );
			$insert=$this->db->insert('service',$data_to_store);
			redirect('http://localhost/abc/index.php/service','refresh');
		}
	}
}
?>