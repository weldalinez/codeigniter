<?php

class Mjulilima_model extends CI_Model{
	function test1(){
		echo "test";
	}
	function insert_data($data){
		$data= array(
				"npm"	=>$this->input->post("npm"),
				"nama"	=>$this->input->post("nama")
			);
		$this->db->insert("tabel1", $data);
	}
	function fetch_data(){
		//select*from tabel1
		$this->db->order_by('npm');
		$query = $this->db->get("tabel1");
		return $query;
	}
}
?>