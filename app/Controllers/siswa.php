<?php 

class Siswa extends Controller {
    public function index() {
        $data['judul'] = 'Siswa';
        $data['siswa'] = $this->model('siswa_model')->getAllSiswa();
        $this->view('theme/header', $data);
        $this->view('siswa/index', $data);
        $this->view('theme/footer');
    }
}