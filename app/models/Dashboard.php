<?php

class Dashboard extends Controller
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    
  // select   mechanical where Active = 0
    public function getInActivemechanicalInfo()
    {
        $this->db->query('SELECT * FROM `users` INNER JOIN `mechanical` ON `users`.`fkmechanical` = `mechanical`.`idm` where Active = 0');
        $InActivemechanicalInfo = $this->db->resultSet();
        return $InActivemechanicalInfo;
    }
}