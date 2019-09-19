<?php
	class Reg_Model extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}
		public function savedata($datareg)
		{
			$this->db->insert('registrtion',$datareg);
		}
		public function getalluser()
		{
			$qry=$this->db->get('registrtion');
			return $qry->result_array();
		}
		public function getuserbyid($id)
		{
			$this->db->where('rid',$id);
			$qry=$this->db->get('registrtion');
			return $qry->result_array();
			
		}
		
	}
?>