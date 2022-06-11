<?php

class Client extends Controller
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    //  getClients by iduser
    public function getClientInfo()
    {
        $this->db->query('SELECT * FROM `users` INNER JOIN `client` ON `users`.`fkclient` = `client`.`idC` WHERE `users`.`iduser` = :iduser');
        $this->db->bind(':iduser', $_SESSION['iduser']);
        $ClientInfo = $this->db->resultSet();
        return $ClientInfo;
    }
    
   
}