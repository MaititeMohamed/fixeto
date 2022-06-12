<?php

class mechanical extends Controller
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    //  getClients by iduser
    public function getmechanicalInfo()
    {
        $this->db->query('SELECT * FROM `users` INNER JOIN `mechanical` ON `users`.`fkmechanical` = `mechanical`.`idm` WHERE `users`.`iduser` = :iduser');
        $this->db->bind(':iduser', $_SESSION['iduser']);
        $mechanicalinfo = $this->db->single();
        return $mechanicalinfo;
    }
}