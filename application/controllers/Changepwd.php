<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
class Changepwd extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->helper(array('url'));
	$this->load->model('Category_Model','',TRUE);
}
public function index()
  {
  	$this->load->helper(array('form','url'));
	$this->load->library('form_validation');
	$this->load->library('session');
	if(!$this->session->userdata('uid'))
	{
		redirect('http://localhost/abc/index.php/usrlogin','refresh');
	}
  	$this->load->view('Changepwd');
  }
public function insert()
{
	$this->load->library('form_validation');
	$this->form_validation->set_rules('currentpwd','Current Password','required');
	$this->form_validation->set_rules('newpwd','newpwd','required');
	$this->form_validation->set_rules('cnnewpwd','cnnewpwd','required');
	if ($this->form_validation->run()==FALSE)
    {
    	$this->load->view('Changepwd');
    }
    else
    {
		$this->load->helper(array('form','url'));
		$this->load->database();
		$this->db->from('signup');
		$this->load->library('session');
		$this->db->where('User_id',$this->session->userdata('uid'));
		$this->db->where('Password',$this->input->post('currentpwd'));
		$query=$this->db->get();
		if($query->num_rows()==1)
		{
			$pwd=$this->input->post('newpwd');
			$this->db->set('Password',$pwd);
			$this->db->where('User_id',$this->session->userdata('uid'));
			$this->db->update('signup');
			redirect('http://localhost/abc/index.php/usrindex','refresh');
		}
		else
		{
			echo "Invalid Password";
		}
	}
}
}
?>