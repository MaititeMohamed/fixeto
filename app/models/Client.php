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
        $ClientInfo = $this->db->single();
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
 // Edit Client
  
  public function Edit($data)
  {
    // Prepare Query
   
    $this->db->query('UPDATE `client` SET `FirstName` = :FirstName, `LastName` = :LastName, `phone` = :phone WHERE `idC` = :idC;
    UPDATE `users` SET `FirstName` = :FirstName, `LastName` = :LastName, `Email` = :Email, `password` = :password WHERE `iduser` = :iduser');

     // Bind Values
    $this->db->bind(':FirstName', $data['FirstName']);
    $this->db->bind(':LastName', $data['LastName']);
    $this->db->bind(':phone', $data['phone']);
    $this->db->bind(':idC', $data['idC']);
    $this->db->bind(':Email', $data['Email']);
     $this->db->bind(':password', $data['password']);
     $this->db->bind(':iduser', $_SESSION['iduser']);
    //Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  } 




}