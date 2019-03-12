<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activateuser extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->helper(array('url'));
}

public function index()
 {
  	$this->load->helper(array('url'));
	$this->load->library('form_validation');
	$this->load->database();
	$Status="Active";
	$gid=$this->input->get('uid');
	$this->db->set('Status',$Status);
	$this->db->where('Group_id',$gid);
	$this->db->update('groups_user');
	redirect("http://localhost/abc/index.php/Grouprequest/?id=$gid",'refresh');
 }
}