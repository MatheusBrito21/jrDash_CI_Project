<?php 

class Home extends CI_Controller{

	public function index(){
		$this->load->view('home/inc/header_view');
		$this->load->view('home/home_view');
		$this->load->view('home/inc/footer_view');
	}
	public function testeDB(){

		$q = $this->db->select('login')->from('user')->like('login', 'h')->get();

		print_r($q->result());
	}
}

?>
