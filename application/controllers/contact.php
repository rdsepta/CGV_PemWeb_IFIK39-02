<?php 	

class contact extends CI_Controller {
	public function index ()
	{
		$data['judul'] = 'contact Us';
		$this->load->view('templates/header', $data);
		$this->load->view('contact/index');
		$this->load->view('templates/footer');
	}
		public function employment ()
	{
		$data['judul'] = 'employment';
		$this->load->view('templates/header', $data);
		$this->load->view('contact/employment');
		$this->load->view('templates/footer');
	}
}