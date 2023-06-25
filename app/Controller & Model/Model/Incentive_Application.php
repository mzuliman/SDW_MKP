<?php

class Incentive_Application{

    private $table = 'incentive_application';
    private $db;

    public function __construct(){

        $this->db = new Database;

    }
    public function getIncentiveInfoByUserIC(){

        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE UserIC=:UserIC');
        $this->db->bind('UserIC', $_SESSION['user_id']);
        return $this->db->single();
    }

    

}

?>