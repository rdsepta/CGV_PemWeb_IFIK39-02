<?php 	

class tastingroom extends CI_Controller {
	public function index ()
	{
		$data['judul'] = 'teasting Room';
		$this->load->view('templates/header', $data);
		$this->load->view('tastingroom/index');
		$this->load->view('templates/footer');
	}
	public function tours ()
	{
		$data['judul'] = 'Tours';
		$this->load->view('templates/header', $data);
		$this->load->view('tastingroom/tours');
		$this->load->view('templates/footer');
	}
	public function picnics ()
	{
		$data['judul'] = 'Picnics';
		$this->load->view('templates/header', $data);
		$this->load->view('tastingroom/picnics');
		$this->load->view('templates/footer');
	}
}