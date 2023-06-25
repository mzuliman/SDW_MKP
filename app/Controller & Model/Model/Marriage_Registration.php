<?php

class Marriage_Registration{

    private $table = 'marriage_registration';
    private $db;

    public function __construct(){

        $this->db = new Database;

    }
    public function getMarriageRegistrationInfoByUserIC(){

        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE UserIC=:UserIC');
        $this->db->bind('UserIC', $_SESSION['user_id']);
        return $this->db->single();
    }
    
}

?>