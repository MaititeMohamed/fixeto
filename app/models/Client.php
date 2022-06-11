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
     // Delete Client
     public function deleteClient($idC){
        // Prepare Query
        $this->db->query('DELETE FROM client WHERE idC = :idC');
  
        // Bind Values
        $this->db->bind(':idC', $idC);
        
        //Execute
        if($this->db->execute()){
          return true;
        } else {
          return false;
        }
      }
   
}