<?php

class Dashboard 
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
      
  //get number og users
    public function getNumberOfUsers()
    {
        $this->db->query('SELECT COUNT(*) as Numberofusers FROM users');
        $numberusers = $this->db->single();
        return $numberusers ;
    }
                
  // get number of clients
    public function getNumberOfClients()
    {
        $this->db->query('SELECT COUNT(*) as Numberofclients FROM client');
        $numberclients = $this->db->single();
        return $numberclients ;
    }
  //get number of mechanicals
    public function getNumberOfMechanicals()
    {
        $this->db->query('SELECT COUNT(*) as Numberofmechanicals FROM mechanical');
        $numbermechanicals = $this->db->single();
        return $numbermechanicals ;
    }



  // select   mechanical where Active = 0
    public function getInActivemechanicalInfo()
    {
        $this->db->query('SELECT * FROM `users` INNER JOIN `mechanical` ON `users`.`fkmechanical` = `mechanical`.`idm` where Active = 0');
        $InActivemechanicalInfo = $this->db->resultSet();
        return $InActivemechanicalInfo;
    }
    // set Active = 1 
    public function setActive($idm)
    {
        $this->db->query('UPDATE `mechanical` SET `Active` = 1 WHERE `idm` = :idm');
        $this->db->bind(':idm', $idm);
        $this->db->execute();
    }
  // select  mechanical where Active = 1
    public function getActivemechanicalInfo()
    {
        $this->db->query('SELECT * FROM `users` INNER JOIN `mechanical` ON `users`.`fkmechanical` = `mechanical`.`idm` where Active = 1');
        $ActivemechanicalInfo = $this->db->resultSet();
        return $ActivemechanicalInfo;
    }
    // getFeedbackInfoById
    public function getFeedbackInfoById($idm)
    {
      $this->db->query('SELECT * FROM `users` INNER JOIN `feedback` ON users.iduser=feedback.fkf_idusers WHERE feedback.fkf_mechanical = :idm');
      $this->db->bind(':idm', $idm);
      $feedbackinfo = $this->db->resultSet();
      return $feedbackinfo;
    }
     // getreportById
     public function getreportById($idm)
     {
       $this->db->query('SELECT * FROM `users` INNER JOIN `report` ON users.iduser=report.fkr_idusers WHERE report.fkr_mechanical = :idm');
       $this->db->bind(':idm', $idm);
       $feedbackinfo = $this->db->resultSet();
       return $feedbackinfo;
     }

  }