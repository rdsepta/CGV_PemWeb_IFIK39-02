<?php 	

class wineclub extends CI_Controller {
	public function index ()
	{
		$data['judul'] = 'Wine Club';
		$this->load->view('templates/header', $data);
		$this->load->view('wineclub/index');
		$this->load->view('templates/footer');
	}
	public function join ()
	{
		$data['judul'] = 'Join';
		//$this->load->model('join_M');
		$this->load->view('templates/header', $data);
		$this->load->view('wineclub/join');
		$this->load->view('templates/footer');
		//$this->join_M->add();
		//redirect('wineclub');
	}
		public function login ()
	{
		$data['judul'] = 'Login';
		$this->load->view('templates/header', $data);
		$this->load->view('wineclub/login');
		$this->load->view('templates/footer');
	}
}