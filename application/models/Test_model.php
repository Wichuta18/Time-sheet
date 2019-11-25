<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_model extends CI_Model {

	function __constuct(){
		parent::__constuct();
		$this->load->database();
	}
    function insert($data){
        $this->db->insert("projects",$data);
    }
}