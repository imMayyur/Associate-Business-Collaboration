<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Groupdetails extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->helper(array('url'));
}

public function index()
 {
  	$this->load->helper(array('url'));
	$this->load->library('form_validation');
	$this->load->library('session');
	if(!$this->session->userdata('uid'))
	{
		redirect('http://localhost/abc/index.php/usrlogin','refresh');
	}
	$id=$this->input->get('id');
	$this->load->database();
	$this->db->where('Group_id',$id);
	$query=$this->db->get('Groups');
	$data['groupdata']=$query->result_array();
  	$this->load->view('Groupdetails',$data);
  } 
 public function request()
 {
	$this->load->database();
	$this->load->library('session');
	$uid=$this->session->userdata('uid');
	$gid=$this->input->post('gid');	
	$status='deactive';
	$data_to_store=array('Group_id'=>$gid,
						 'Status'=>$status,
						 'User_id'=>$uid
						);
	$insert=$this->db->insert('groups_user',$data_to_store);
	redirect('http://localhost/abc/index.php/usrindex','refresh'); 
 }
}