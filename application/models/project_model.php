<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_model extends CI_Model {

	function __constuct(){
		parent::__constuct();
	}
    public function index()
	{
		return $this->db->get('projects');
		
	}
    public function select_prj($idProject)
    {
		$query = $this->db->get_where("project",array("idProject"=>$idProject));
		
		$data = $query->result(); 
		
		return $data;
	}

	// public function insert_emp($data) { 
	// 	if ($this->db->insert("employees", $data)) { 
	// 	   return true; 
	// 	} 
	// 	else Echo "error";
    //  } 
}

