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
}