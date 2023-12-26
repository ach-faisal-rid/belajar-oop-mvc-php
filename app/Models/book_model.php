<?php

class Book_model {
    private $table = 'book';
    private $db;
    public function __construct() {
        $this->db = new Database;
    }
    public function getAllBook() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getBookById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    
    public function hapusDataBook($id) {
        $query = "DELETE FROM book WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}