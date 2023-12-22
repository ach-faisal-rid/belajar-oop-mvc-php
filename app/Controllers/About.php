<?php

class About extends Controller {
    public function index($nama = 'burhan', $pekerjaan = 'pro copy paste', $usia = 32) {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['usia'] = $usia;
        $this->view('about/index', $data);
    }
    public function page() {
        echo 'About/page';
    }
}