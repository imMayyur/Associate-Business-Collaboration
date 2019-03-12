<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
class Editprofile extends CI_Controller {

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
	$uid=$this->session->userdata('uid');
	$this->load->database();
	$this->db->where('User_id',$uid);
	$query=$this->db->get('user_profile');
	$showdata['userdata']=$query->result_array();
  	$query=$this->db->get('category');
	$showdata['catdata']=$query->result_array();
	$this->load->view('Editprofile',$showdata);
	
	
  }
  public function do_upload()
  {
  	$config['upload_path']          = './upload';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 1024;
    $config['max_width']            = 1024;
    $config['max_height']           = 768;
    $this->load->library('upload', $config);
    $this->load->database();
	$this->load->library('session');
	$uid=$this->session->userdata('uid');
    if ( ! $this->upload->do_upload('proimg'))
    {
    	$error = array('error' => $this->upload->display_errors());
        $this->load->view('upload', $error);
    }
	else
	{
		$this->load->library('session');
		$uid=$this->session->userdata('uid');
		$data = array('upload_data' => $this->upload->data());
		$img=$this->upload->data('file_name');
		$this->load->database();
		$data=array('Profileimg'=>$img,
					'Address'=>$this->input->post('address'),
					'City'=>$this->input->post('city'),
					'State'=>$this->input->post('state'),
					'Pincode'=>$this->input->post('pin'),
					'Country'=>$this->input->post('country'),
					'Dob'=>$this->input->post('dob'),
					'Quali'=>$this->input->post('qualification'),
					'Skills'=>$this->input->post('skill'),
					'Hobby'=>$this->input->post('hobby'),
					'Cat_id'=>$this->input->post('category'),
					'Subcat_id'=>$this->input->post('subcategory')
					);
		$this->db->set('Profileimg',$data['Profileimg']);
		$this->db->set('Address',$data['Address']);
		$this->db->set('City',$data['City']);
		$this->db->set('State',$data['State']);
		$this->db->set('Pincode',$data['Pincode']);
		$this->db->set('Country',$data['Country']);
		$this->db->set('Dob',$data['Dob']);
		$this->db->set('Quali',$data['Quali']);
		$this->db->set('Skills',$data['Skills']);
		$this->db->set('Hobby',$data['Hobby']);
		$this->db->set('Cat_id',$data['Cat_id']);
		$this->db->set('Subcat_id',$data['Subcat_id']);
		$this->db->where('User_id',$uid);
		$this->db->update('user_profile');
		redirect("http://localhost/abc/index.php/myprofile",'refresh');
	}
  }
  }
?>