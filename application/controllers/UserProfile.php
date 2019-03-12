<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserProfile extends CI_Controller
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
	    $this->load->database();
		$this->load->view('UserProfile');
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
			 	$data = array('upload_data' => $this->upload->data());
				$img=$this->upload->data('file_name');
			 	$this->load->database();
				$this->load->library('session');
			 	$uid=$this->session->userdata('uid');
			 	$data_to_store=array('Address'=>$this->input->post('address'),
			 					  'City'=>$this->input->post('city'),
								  'Country'=>$this->input->post('country'),
								  'Dob'=>$this->input->post('dob'),
								  'Profileimg'=>$img,
								  'Hobby'=>$this->input->post('hobby'),
								  'Pincode'=>$this->input->post('pin'),
								  'Profileimg'=>$img,
								  'Quali'=>$this->input->post('qualification'),
								  'Skills'=>$this->input->post('skill'),
								  'State'=>$this->input->post('state'),
								  'User_id'=>$uid,
								  'Cat_id'=>$this->input->post('category'),
								  'Subcat_id'=>$this->input->post('subcategory')
								 );	
			$insert=$this->db->insert('user_profile',$data_to_store);
  			redirect('http://localhost/abc/index.php/UserProfile','refresh');
			}
		}												
}