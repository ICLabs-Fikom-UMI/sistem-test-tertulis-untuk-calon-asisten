<?php

class About extends Controller{
    public function index($nama = 'Annisa', $pekerjaan = 'Dosen')
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['judul'] = 'About me';
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
       $this->view('about/index');
       $this->view('templates/footer');
    }

    public function page()
    {
        $data['judul'] = 'pages';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}