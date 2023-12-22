<?php 

class Home extends Controller {
    public function index() {
        $data['judul'] = 'Home';
        $this->view('theme/header', $data);
        $this->view('home/index');
        $this->view('theme/footer');
    }
}