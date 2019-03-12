<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->helper(array('url'));
}
public function index()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->helper(array('url'));
		$this->load->library('form_validation');
		$this->load->library('session');
		if(!$this->session->userdata('uid'))
		{
			redirect('http://localhost/abc/index.php/usrlogin','refresh');
		}
		$this->load->database();
		$id1=$this->input->get('id');
		$query1="select Email from signup where User_id=?";
		$query=$this->db->query($query1,$id1);
		$data['messageto']=$query->result_array();
		$this->load->library('session');
		$uid=$this->session->userdata('uid');
		$query2="select Email from signup where User_id=?";
		$query=$this->db->query($query2,$uid);
		$data['messagefrom']=$query->result_array();
		$this->load->view('Message',$data);
	}
 public function insert()
  {
	
	
  	$this->load->library('form_validation');
	$this->form_validation->set_rules('msgtitle','msgtitle','required');
	$this->form_validation->set_rules('msgdesc','msgdesc','required');
	$this->form_validation->set_rules('msgto','msgfrom','required');
	if($this->form_validation->run()==FALSE)
	{
		$this->load->view('Message');
	}
	else
	{
		$this->load->database();
		$this->load->library('session');
		$uid=$this->session->userdata('uid');
		$data_to_store=array('Title'=>$this->input->post('msgtitle'),
							 'Msg_desc'=>$this->input->post('msgdesc'),
							 'Msg_to'=>$this->input->post('msgto'),
							 'Msg_from'=>$this->input->post('msgfrom')
							 );
		$insert=$this->db->insert('Message',$data_to_store);
  		redirect('http://localhost/abc/index.php/usrindex','refresh');
	}
  }
}