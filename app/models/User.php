<?php
  class User {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }
         // Add User / Register
     public function register($data){
        // Prepare Query
        $this->db->query('INSERT INTO `client`( `FirstName`, `LastName`,
         `Email`, `password`, `phone`) 
        VALUES  (:FirstName, :LastName,:Email, :password,:phone)');
  
        // Bind Values
        $this->db->bind(':FirstName', $data['FirstName']);
        $this->db->bind(':LastName', $data['LastName']);
        $this->db->bind(':Email', $data['Email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':phone', $data['phone']);
        //Execute
        if($this->db->execute()){
          return true;
        } else {
          return false;
        }
      }
       // Login / Authenticate User
    public function login($Email,$password){
      $this->db->query("SELECT * FROM client WHERE Email = :Email");
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
                $this->db->query("SELECT * FROM client WHERE Email = :Email");
                $this->db->bind(':Email', $Email);
                $row = $this->db->single();
                //Check Rows
                if($this->db->rowCount() > 0){
                    return true;
                }else{
                     return false;
                }
        }

       //add to users table 
      //  public function addTotableUser($Email){
      //       $this->db->query("INSERT INTO users (Email,password,role) 
      //       SELECT Email,password,role FROM client  where Email =:Email");
      //       $this->db->bind(':Email', $Email);
      //       $this->db->execute();
      //  }












}