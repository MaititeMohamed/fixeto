<?php
  class User {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }
         // Add User / Register
     public function register($data){
        // Prepare Query
        $this->db->query('INSERT INTO `client`( `FirstName`, `LastName`, `phone`)
        VALUES  (:FirstName, :LastName,:phone); 
        INSERT INTO `users`(`FirstName`,`LastName`,`Email`,`password`) 
        VALUES(:FirstName,:LastName,:Email,:password);');
  
        // Bind Values
        $this->db->bind(':FirstName', $data['FirstName']);
        $this->db->bind(':LastName', $data['LastName']);
        $this->db->bind(':Email', $data['Email']);
        $this->db->bind(':password',$data['password']);
        $this->db->bind(':phone', $data['phone']);
        //Execute
        if($this->db->execute()){
          return true;
        } else {
          return false;
        }
      }
      


   // create function get idC client and Update fkclient in table user
    public function selectClientId($data){
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
    public function login($Email,$password){
      $this->db->query("SELECT * FROM users WHERE Email = :Email");
      $this->db->bind(':Email', $Email);
      $row = $this->db->single();
      $hashed_password = $row->password;
      if(password_verify($password, $hashed_password)){
        return $row;
      } else {
        return false;
      }
    }
      // Find USer BY Email
        public function findUserByEmail($Email){
                $this->db->query("SELECT * FROM users WHERE Email = :Email");
                $this->db->bind(':Email', $Email);
                $row = $this->db->single();
                //Check Rows
                if($this->db->rowCount() > 0){
                    return true;
                }else{
                     return false;
                }
        }
     
// part user mechanical 








       



    










}