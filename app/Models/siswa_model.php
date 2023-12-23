<?php

class Siswa_model {
    private $db;
    private $stmt;
    public function __construct() {
        $db = 'mysql:host=localhost;dbname=bookshelf';

        try {
            $this->db = new PDO($db , 'root', 'root');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllSiswa() {
        $this->stmt = $this->db->prepare('SELECT * FROM siswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
}