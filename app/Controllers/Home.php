<?php 

class Home extends Controller {
    public function index() {
        $data['judul'] = 'Home';
        $data['nama'] = $this->model('user_model')->getUser();
        $this->view('theme/header', $data);
        $this->view('home/index', $data);
        $this->view('theme/footer');
    }
}