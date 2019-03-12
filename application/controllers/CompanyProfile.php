<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyProfile extends CI_Controller
{
	public function index()
	{
		$this->load->library('session');
		if(!$this->session->userdata('uid'))
		{
			redirect('http://localhost/abc/index.php/usrlogin','refresh');
		}
		$this->load->view('CompanyProfile');
	}
	public function insert()
  {
  	$this->load->library('form_validation');
	$this->form_validation->set_rules('compdesc','compdesc','required');
	$this->form_validation->set_rules('address','address','required');
	$this->form_validation->set_rules('city','city','required');
	$this->form_validation->set_rules('pincode','pincode','required');
	$this->form_validation->set_rules('speciality','speciality','required');
	$this->form_validation->set_rules('url','url','required');
	if($this->form_validation->run()==FALSE)
	{
		$this->load->view('Companyprofile');
	}
	else
	{
		$this->load->database();
		$uid=1;
		$proimg='';
		$state='Gujarat';
		$country='India';
		$data_to_store=array('Profile_img'=>$proimg,
							 'Comp_name'=>$this->input->post('compname'),
							 'Profile_desc'=>$this->input->post('compdesc'),
							 'Address'=>$this->input->post('address'),
							 'City'=>$this->input->post('city'),
							 'Pincode'=>$this->input->post('pincode'),
							 'State'=>$state,
							 'Country'=>$country,
							 'Speciality'=>$this->input->post('speciality'),
							 'Url'=>$this->input->post('url'),
							 'User_id'=>$uid
							 );
		$insert=$this->db->insert('comp_profile',$data_to_store);
  		$this->load->view('Success');
	}
  }
}
?>