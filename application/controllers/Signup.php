<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller
{
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
		$this->load->database();
		$query=$this->db->get('signup');
		$data['signup']=$query->result_array();
		$this->load->view('Signup',$data);
	}
public function insert()
  {
  	$this->load->library('form_validation');
		$this->load->database();
		$status='Active';
		$data_to_store=array(
							 'Lastname'=>$this->input->post('lname'),
							 'Firstname'=>$this->input->post('fname'),
							 'User_name'=>$this->input->post('uname'),
							 'Password'=>$this->input->post('pwd'),
							 'Email'=>$this->input->post('email'),
							 'Mobileno'=>$this->input->post('mno'),
							 'Gender'=>$this->input->post('gender'),
							 'Squestion'=>$this->input->post('sques'),
							 'Sans'=>$this->input->post('answer'),
							 'Status'=>$status
							 );
		$insert=$this->db->insert('Signup',$data_to_store);
		$query1="select max(User_id) as uid from signup";
		$data['max']=$this->db->query($query1)->result_array();
		foreach($data['max'] as $row)
		{
			$query2="insert into user_profile(User_id)values($row[uid])";
			$this->db->query($query2);
		}
  		redirect('http://localhost/abc/index.php/usrlogin','refresh');
  }
}
?>