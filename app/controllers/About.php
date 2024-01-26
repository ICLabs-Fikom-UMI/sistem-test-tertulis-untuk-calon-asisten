<?php

class About extends Controller {
    publci function index($nama = 'Sandikha', $pekerjaan = 'mahasiswa' $umur = 32)
     {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        $tihs->view('templates/header', $data);
        $this->view('about/index', $data);
        $tihs->view('home/index', $data);
        $tihs->view('templates/footer');
        //echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan. Saya
       // berumur $umur tahun.";

     }
    public function page()
    {
        //echo 'About/page';
        $data['judul'] = 'pages';
        $tihs->view('templates/header', $data);
        $this->view('about/page');
        $tihs->view('templates/footer');
    }
}
