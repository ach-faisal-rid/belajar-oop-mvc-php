<?php

class About extends Controller {
    public function index($nama = 'burhan', $pekerjaan = 'pro copy paste', $usia = 32) {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['usia'] = $usia;
        $data['judul'] = 'About';
        $this->view('theme/header-custom', $data);
        $this->view('about/index', $data);
        $this->view('theme/footer-custom');
    }
    public function page() {
        echo 'About/page';
    }
}