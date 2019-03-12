<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
class Logout extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->helper(array('url'));
}
public function index()
  {
	  $this->load->library('session');
	  $this->session->unset_userdata('User');
	  $this->session->unset_userdata('uid');
	  $this->session->sess_destroy();
	  redirect('http://localhost/abc/index.php/usrlogin','refresh');
  }
  }
?>