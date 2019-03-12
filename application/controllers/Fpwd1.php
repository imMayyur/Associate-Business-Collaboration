<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Fpwd1 extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
	}
	public function index()
	{
		$this->load->view('fpwd1');
	}
	public function forget()
	{
		$this->load->library('session');
		$this->session->set_userdata('femail',$this->input->post('email'));
		redirect('http://localhost/abc/index.php/fpwd2','refresh');	
	}
}