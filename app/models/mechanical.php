<?php

class mechanical 
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

 //  get all mechanical
 public function getAllmechanicalInfo()
 {
     $this->db->query('SELECT * FROM `users` INNER JOIN `mechanical` ON `users`.`fkmechanical` = `mechanical`.`idm` where Active = 1');
     $AllmechanicalInfo = $this->db->resultSet();
     return $AllmechanicalInfo;
 }
     // Delete mechaical
     public function delete($idm){
        // Prepare Query
        $this->db->query('DELETE FROM mechanical WHERE idm = :idm');
  
        // Bind Values
        $this->db->bind(':idm', $idm);
        
        //Execute
        if($this->db->execute()){
          return true;
        } else {
          return false;
        }
      }
    // Edit mechanical
    public function Edit($data)
    {
        // Prepare Query

        $this->db->query('UPDATE `mechanical` SET `FirstName` = :FirstName, `LastName` = :LastName,`City` = :City,`phone` = :phone,`twitter` = :twitter,`instagram` = :instagram,`facebook` = :facebook WHERE `idm` = :idm;
      UPDATE `users` SET `FirstName` = :FirstName, `LastName` = :LastName, `Email` = :Email, `password` = :password WHERE `iduser` = :iduser');

        // Bind Values
        $this->db->bind(':FirstName', $data['FirstName']);
        $this->db->bind(':LastName', $data['LastName']);
        $this->db->bind(':City', $data['City']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':twitter', $data['twitter']);
        $this->db->bind(':instagram', $data['instagram']);
        $this->db->bind(':facebook', $data['facebook']);
        $this->db->bind(':idm', $data['idm']);
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


    public function getmechanicalInfoById($idm)
    {
        $this->db->query('SELECT * FROM `users` INNER JOIN `mechanical` ON `users`.`fkmechanical` = `mechanical`.`idm` WHERE `users`.`fkmechanical` = :idm');
    
        $this->db->bind(':idm', $idm);
        $mechanicalinfo = $this->db->single();
        return $mechanicalinfo;
    }

     // select message and users info by fkm_idusers
      public function getMessageInfoById($idm)
      {
        $this->db->query('SELECT * FROM `users` INNER JOIN `messages` ON users.iduser=messages.fkm_idusers WHERE messages.fkm_mechanical = :idm');
        $this->db->bind(':idm', $idm);
        $messageinfo = $this->db->resultSet();
        return $messageinfo;
          
      }
      // select message and users info by fkm_idusers
    //   public function getNumberMessage($idm)
    //   {
        
    //     $this->db->query('SELECT count(*) FROM `users` INNER JOIN `messages` ON users.iduser=messages.fkm_idusers WHERE messages.fkm_mechanical = :idm');
      
    //     $this->db->bind(':idm', $idm);
    //     $messageinfo = $this->db->resultSet();
    //     return $messageinfo;
          
    //   }

}
