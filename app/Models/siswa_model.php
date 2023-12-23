<?php

class Siswa_model {
    private $siswa = [ 
        [
            "nama" => "Yessi Pratiwi",
            "nisn" => 141295990,
            "email" => "inasyidah@hartati.org",
            "jurusan" => "rekayasa perangkat lunak"
        ],
        [
            "nama" => "Uci Puspita",
            "nisn" => 141291641,
            "email" => "imardhiyah@yahoo.co.id",
            "jurusan" => "multimedia"
        ],
        [
            "nama" => "Hairyanto",
            "nisn" => 141218318,
            "email" => "utami.qori@permata.co.id",
            "jurusan" => "rekayasa perangkat lunak"
        ],
        
    ];

    public function getAllSiswa() {
        return $this->siswa;
    }
    
}