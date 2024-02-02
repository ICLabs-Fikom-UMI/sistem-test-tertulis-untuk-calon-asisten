<?php


class Home extends Controller {
    
    public function index()
    {
        $data['title'] = 'Home';

        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('sidebar');
        $this->view('templates/footer');

    }
}