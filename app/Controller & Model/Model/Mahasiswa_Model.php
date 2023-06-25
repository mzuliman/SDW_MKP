<?php

class Mahasiswa_Model {

    private $table = 'mahasiswa';
    private $db;

    public function __construct(){

        $this->db = new Database;

    }

    public function getAllMahasiswa(){

        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
        
    }

    public function getMahasiswaByID($ID){

        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $ID);
        return $this->db->single();
        
    }

    public function addMahasiswa($data){

        $query = "INSERT INTO mahasiswa
                    VALUES
                    ('', :name, :tahun, :program)";

        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('tahun', $data['tahun']);
        $this->db->bind('program', $data['program']);

        $this->db->execute();

        return $this->db->rowCount();
    }

}

?>