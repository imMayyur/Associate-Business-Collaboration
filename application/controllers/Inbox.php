<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
class Inbox extends CI_Controller {

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
	if(!$this->session->userdata('uid'))
	{
		redirect('http://localhost/abc/index.php/usrlogin','refresh');
	}
	$this->load->database();
	$this->load->library('session');
	$email=$this->session->userdata('email');
	$query1="select * from Message where Msg_to=?";
	$query=$this->db->query($query1,$email);
	$data['msgdata']=$query->result_array();
	$this->load->view('Inbox',$data);
  }
  }
?>