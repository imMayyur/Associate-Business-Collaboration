<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
class Reply extends CI_Controller {

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
	$mid=$this->input->get('id');
	$email=$this->session->userdata('email');
	$query1="select * from Message where Msg_id=?";
	$query=$this->db->query($query1,$mid);
	$data['msgdata']=$query->result_array();
	$this->load->view('Reply',$data);
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
  		redirect('http://localhost/abc/index.php/usrindex',refresh);
	}
  }
}
?>