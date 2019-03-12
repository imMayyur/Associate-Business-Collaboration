<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Group extends CI_Controller {
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
	$id=$this->session->userdata('uid');
	$this->load->database();
	$this->db->where('User_id',$id);
	$query=$this->db->get('groups');
	$data['groups']=$query->result_array();
  	$this->load->view('Group',$data);
}
public function do_upload()
        {
                $config['upload_path']          = './upload';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1024;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);
                $this->load->database();
				$this->load->library('session');
				$uid=$this->session->userdata('uid');
                if ( ! $this->upload->do_upload('img'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        $this->load->view('upload', $error);
                }
                else
                {
					$data = array('upload_data' => $this->upload->data());
					$img=$this->upload->data('file_name');
					$this->load->database();
					$data_to_store=array('Group_name'=>$this->input->post('grpname'),
										 'Group_desc'=>$this->input->post('grpdesc'),
										 'Group_img'=>$img,
										 'User_id'=>$uid
										);
			     	$insert=$this->db->insert('groups',$data_to_store);
					//$this->load->view('Group',$data);			
					
					redirect('http://localhost/abc/index.php/Group','refresh');
                }
		}
		
}
		
		
		