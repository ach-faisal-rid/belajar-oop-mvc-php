<?php

class Siswa_model {
    private $table = 'siswa';
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function getAllSiswa() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getSiswaById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }    

    public function tambahDataSiswa($data) {
        $data = array_filter($data, function ($key) {
            return $key != 'id';
          });
          $this->db->query('INSERT INTO siswa (nama, nisn, email, jurusan) VALUES (:nama, :nisn, :email, :jurusan)', $data);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nisn', $data['nisn']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function hapusDataSiswa($id) {
        $query = "DELETE FROM siswa WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function ubahDataSiswa($data) {
        $query = "UPDATE siswa SET
                    nama = :nama,
                    nisn = :nisn,
                    email = :email,
                    jurusan = :jurusan
                  WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nisn', $data['nisn']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataSiswa()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM siswa WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}