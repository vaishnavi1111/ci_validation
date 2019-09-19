<?php
class Home extends CI_Controller
{
	
	public function __Construct()
	{
		parent::__Construct();
		
	}
	public function index()
	{
		$this->load->view('welcome');
	}

}