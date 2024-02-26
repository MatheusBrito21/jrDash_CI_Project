<?php 

class User_model extends CI_Model{

	public function get($id){

		if($id != null){
			$query = $this->db->select('login')->from('user')->where('user_id', $id)->get();
		}else{
			$query = $this->db->select('login')->from('user')->get();
		}

		return $query;
	}

	public function insert(){

	}

	public function update(){

	}

	public function delete(){

	}
}


?>
