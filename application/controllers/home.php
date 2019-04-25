<?php

class home extends CI_Controller {
    public function index()
    {
        $data['judul'] = 'Cooper Garrod Estate Vineyards';
        $this->load->view('templates/header', $data);
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }
}