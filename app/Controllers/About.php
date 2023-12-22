<?php

class About extends Controller {
    public function index($nama = 'burhan', $pekerjaan = 'pro copy paste', $usia = 32) {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['usia'] = $usia;
        $data['judul'] = 'About';
        $this->view('theme/header', $data);
        $this->view('about/index', $data);
        $this->view('theme/footer');
    }
    public function page() {
        echo 'About/page';
    }
}