<?php

class Consultation_Registration{

    private $table = 'Consultation_Registration';
    private $db;

    public function __construct(){

        $this->db = new Database;

    }
    public function getConsultInfoByUserIC(){

        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE UserIC=:UserIC');
        $this->db->bind('UserIC', $_SESSION['user_id']);
        return $this->db->single();
    }

    

}

?>