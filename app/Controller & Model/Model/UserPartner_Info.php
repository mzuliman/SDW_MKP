<?php

class UserPartner_Info{

    private $table = 'UserPartner_Info';
    private $db;

    public function __construct(){

        $this->db = new Database;

    }

    public function getUserPartnerByIC(){

        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE UserIC=:UserIC');
        $this->db->bind('UserIC', $_SESSION['user_id']);
        return $this->db->single();
    }

    

}

?>