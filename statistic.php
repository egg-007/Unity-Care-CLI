<?php

require_once "config.php";

class Statistic{

    private $db;

    public function __construct()
    {
        $this->db = new Config();
    }
    public function getAverageAge(){
        
        $query = "SELECT AVG(TIMESTAMPDIFF(YEAR, date_of_birth, CURDATE())) FROM patients";
        $stm = $this->db->getPdo()->prepare($query);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
}