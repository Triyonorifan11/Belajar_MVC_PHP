<?php

class Portofolio extends Controller
{


    public function index()
    {
        $data['judul'] = 'Portofolio';
        $data['portofolio'] = $this->model('Portofolio_model')->getPortofolio();
        $this->view('templates/header', $data);
        $this->view('portofolio/index', $data);
        $this->view('templates/footer');
    }
}
