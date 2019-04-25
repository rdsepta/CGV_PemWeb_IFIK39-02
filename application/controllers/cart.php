<?php 	

class cart extends CI_Controller {
	public function index ()
	{
		$data['judul'] = 'Shopping Cart';
		$this->load->view('templates/header', $data);
		$this->load->view('cart');
		$this->load->view('templates/footer');
	}
}