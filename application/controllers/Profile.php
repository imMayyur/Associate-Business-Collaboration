<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
class Profile extends CI_Controller {

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
	$id1=$this->input->get('id');
	$this->load->database();
	$query1="SELECT Signup . * , user_profile . *,category.cat_name,subcategory.subcat_name FROM Signup JOIN user_profile ON user_profile.user_id = signup.user_id join category on category.cat_id=user_profile.cat_id join subcategory on subcategory.subcat_id=user_profile.subcat_id where user_profile.user_id=?";
	$query=$this->db->query($query1,$id1);
	$data['Profiledata']=$query->result_array();
	$query2="select * from Posting where User_id=?";
	$query22=$this->db->query($query2,$id1);
	$data['Postdata']=$query22->result_array();
	$query3="select * from Service where User_id=?";
	$query33=$this->db->query($query3,$id1);
	$data['Servicedata']=$query33->result_array();
	$query4="select * from Job where User_id=?";
	$query44=$this->db->query($query4,$id1);
	$data['Jobdata']=$query44->result_array();
  	$this->load->view('Profile',$data);
  }
}
?>