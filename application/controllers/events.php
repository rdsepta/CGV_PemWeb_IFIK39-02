<?php 	

class events extends CI_Controller {
	public function index ()
	{
		$data['judul'] = 'Events';
		$this->load->view('templates/header', $data);
		$this->load->view('events/index');
		$this->load->view('templates/footer');
	}
	public function yourevent ()
	{
		$data['judul'] = 'Your Event';
		$this->load->view('templates/header', $data);
		$this->load->view('events/yourevent');
		$this->load->view('templates/footer');
	}
}