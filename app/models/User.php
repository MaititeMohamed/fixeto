<?php
class User
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }
  //  registermechanical 
  // create function for registermechanical
  public function registermechanical($data)
  {
      // Prepare Query
      $this->db->query('INSERT INTO `mechanical`(`FirstName`,`LastName`,`City`,`phone`,`twitter`,`instagram`,`facebook`)
    VALUES  (:FirstName,:LastName,:City,:phone,:twitter,:instagram,:facebook); 
    INSERT INTO `users`(`FirstName`,`LastName`,`Email`,`password`)
          VALUES(:FirstName,:LastName,:Email,:password);');

      // Bind Values
      $this->db->bind(':FirstName', $data['FirstName']);
      $this->db->bind(':LastName', $data['LastName']);
      $this->db->bind(':Email', $data['Email']);
      $this->db->bind(':password', $data['password']);
      $this->db->bind(':phone', $data['phone']);
      $this->db->bind(':twitter', $data['twitter']);
      $this->db->bind(':instagram', $data['instagram']);
      $this->db->bind(':facebook', $data['facebook']);
      $this->db->bind(':City', $data['City']);

      //Execute
      if ($this->db->execute()) {
        return true;
      } else {
        return false;
      }
  }
    // create function get idC client and Update fkclient in table user
    public function selectMechanicalId($data)
    {
      $this->db->query('SELECT `idm` FROM `mechanical` WHERE `FirstName` = :FirstName AND `LastName` = :LastName AND `phone` = :phone');
      $this->db->bind(':FirstName', $data['FirstName']);
      $this->db->bind(':LastName', $data['LastName']);
      $this->db->bind(':phone', $data['phone']);
      $row = $this->db->single();
      $this->db->query('UPDATE `users` SET `fkmechanical` = :fkmechanical WHERE `Email` = :Email');
      $this->db->bind(':fkmechanical', $row->idm);
      $this->db->bind(':Email', $data['Email']);
      $this->db->execute();
    }
 



  //  Registerclient
  public function registerclient($data)
  {
    // Prepare Query
    $this->db->query('INSERT INTO `client`( `FirstName`, `LastName`, `phone`)
        VALUES  (:FirstName, :LastName,:phone); 
        INSERT INTO `users`(`FirstName`,`LastName`,`Email`,`password`) 
        VALUES(:FirstName,:LastName,:Email,:password);');

    // Bind Values
    $this->db->bind(':FirstName', $data['FirstName']);
    $this->db->bind(':LastName', $data['LastName']);
    $this->db->bind(':Email', $data['Email']);
    $this->db->bind(':password', $data['password']);
    $this->db->bind(':phone', $data['phone']);
    //Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  // create function get idC client and Update fkclient in table user
  public function selectClientId($data)
  {
    $this->db->query('SELECT `idC` FROM `client` WHERE `FirstName` = :FirstName AND `LastName` = :LastName AND `phone` = :phone');
    $this->db->bind(':FirstName', $data['FirstName']);
    $this->db->bind(':LastName', $data['LastName']);
    $this->db->bind(':phone', $data['phone']);
    $row = $this->db->single();
    $this->db->query('UPDATE `users` SET `fkclient` = :fkclient WHERE `Email` = :Email');
    $this->db->bind(':fkclient', $row->idC);
    $this->db->bind(':Email', $data['Email']);
    $this->db->execute();
  }


  // Login / Authenticate User
  public function login($Email, $password)
  {
    $this->db->query("SELECT * FROM users WHERE Email = :Email");
    $this->db->bind(':Email', $Email);
    $row = $this->db->single();
    $hashed_password = $row->password;
    if (password_verify($password, $hashed_password)) {
      return $row;
    } else {
      return false;
    }
  }
  // Find USer BY Email
  public function findUserByEmail($Email)
  {
    $this->db->query("SELECT * FROM users WHERE Email = :Email");
    $this->db->bind(':Email', $Email);
    $row = $this->db->single();
    //Check Rows
    if ($this->db->rowCount() > 0) {
      return true;
    } else {
      return false;
    }
  }



      //send message
      public function SendMessage($data)
      {
        // Prepare Query
        $this->db->query('INSERT INTO `messages` ( `fkm_idusers`,`fkm_mechanical`,`content`)
         VALUES (:fkm_idusers,:fkm_mechanical,:content  );');

        // Bind Values
        $this->db->bind(':fkm_idusers',$data['iduser'] );
        $this->db->bind(':fkm_mechanical',$data['idm'] );
        $this->db->bind(':content', $data['content']);

        //Execute
        if ($this->db->execute()) {
          return true;
        } else {
          return false;
        }
        
      }

     


      // report 
      public function report($data)
     {
      // Prepare Query
      $this->db->query('INSERT INTO `report` ( `fkr_idusers`,`fkr_mechanical`,`content`)
       VALUES (:fkr_idusers,:fkr_mechanical,:content );');

      // Bind Values
      $this->db->bind(':fkr_idusers',$data['iduser'] );
      $this->db->bind(':fkr_mechanical',$data['idm'] );
      $this->db->bind(':content', $data['content']);

      //Execute
      if ($this->db->execute()) {
        return true;
      } else {
        return false;
      }
      
    }





//sendFeedback 
public function sendFeedback($data)
{
  // Prepare Query
  $this->db->query('INSERT INTO `feedback` (`fkf_idusers`,`fkf_mechanical`,`content`)
   VALUES (:fkf_idusers,:fkf_mechanical,:content );');

  // Bind Values
  $this->db->bind(':fkf_idusers',$data['iduser'] );
  $this->db->bind(':fkf_mechanical', $data['idm']);
  $this->db->bind(':content', $data['content']);

  //Execute
  if ($this->db->execute()) {
    return true;
  } else {
    return false;
  }
}












}
