<?php

class directions extends CI_Controller {
    public function index()
    {
        $data['judul'] = 'Directions';
        $this->load->view('templates/header', $data);
        $this->load->view('directions/index');
        $this->load->view('templates/footer');
    }
}