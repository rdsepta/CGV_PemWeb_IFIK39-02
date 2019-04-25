<?php 	

class ourwines extends CI_Controller {
	public function index ()
	{
		$data['judul'] = 'Our Wines';
		$this->load->view('templates/header', $data);
		$this->load->view('ourwines/index');
		$this->load->view('templates/footer');
	}
}