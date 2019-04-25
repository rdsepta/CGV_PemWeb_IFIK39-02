<?php 	

class aboutus extends CI_Controller {
	public function index ()
	{
		$data['judul'] = 'About Us';
		$this->load->view('templates/header', $data);
		$this->load->view('aboutus/index');
		$this->load->view('templates/footer');
	}
	public function vineyards ()
	{
		$data['judul'] = 'Vineyards';
		$this->load->view('templates/header',$data);
		$this->load->view('aboutus/vineyards');
		$this->load->view('templates/footer');
	}
	public function whoweare ()
	{
		$data['judul'] = 'Who We Are';
		$this->load->view('templates/header',$data);
		$this->load->view('aboutus/whoweare');
		$this->load->view('templates/footer');
	}
}