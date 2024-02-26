<?php 

class User extends CI_Controller{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('User_model');
	}

	public function index(){
		echo 'User controller';
	}

	public function get($id = null){
		$r = $this->User_model->get($id)->result();
		print_r($r);
	}

	public function insert(){

	}

	public function update(){

	}

	public function delete(){

	}

}


?>
