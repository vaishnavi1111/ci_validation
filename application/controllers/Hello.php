<?php
defined('BASEPATH')OR Exit('no direct script allowed');
class Hello Extends CI_Controller
{
	public function index()
	{
		$this->load->view('Hello_World');
	}
}