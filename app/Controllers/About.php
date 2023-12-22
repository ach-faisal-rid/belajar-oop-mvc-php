<?php

class About {
    public function index($nama = 'burhan', $pekerjaan = 'pro copy paste') {
        echo "hallo saya $nama, saya adalah seorang $pekerjaan";
    }
    public function page() {
        echo 'About/page';
    }
}