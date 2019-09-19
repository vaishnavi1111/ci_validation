<?php
defined('BASEPATH')OR Exit('no direct script are allowed');
class Reg Extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Reg_Model','',true);
	}
	public function index()
	{
		
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->model('Reg_Model','',true);
		$data['result']=$this->Reg_Model->getalluser();
		$this->load->view('regform',$data);
	}
	public function save()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('txtname','Firstname','trim|required');
		$this->form_validation->set_rules('txtlname','Lastname','trim|required');
		$this->form_validation->set_rules('txtpassword','password',
				'trim|required|min_length[5]|max_length[10]');
		//$this->form_validation->set_rules('cpwd','cpwd','trim|required|matches[txtpassword]|xss_clean');
		$this->form_validation->set_rules('txtemail','Email','trim|required|valid_Email');
		
		//trim is use for remove whitespace
		if($this->form_validation->run()==False)
		{
			$this->load->view('regform');
		}
		else
		{
			$datareg=array(
			'fname'=>$this->input->post('txtname'),
			'lname'=>$this->input->post('txtlname'),
			'email'=>$this->input->post('txtemail'),
			'password'=>$this->input->post('txtpassword'),
			'gender'=>$this->input->post('gender')
			);
			$this->load->model('Reg_Model','',true);
			$this->load->database();
			$this->db->set($datareg);
			$this->Reg_Model->savedata($datareg);	
		}	
	}
}