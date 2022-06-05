<?php
class Users extends Controller{
         
public function __construct()
{
    
}
    //register methode 
    public function register(){
        //check for POST
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //Process form

        }else{
            //Init Data 
        $data=[
            'FirstName'=> '',
            'LastName'=> '',
            'Email'=> '',
            'password'=> '',
            'phone'=> '',
            'confirm_password'=>'',
            'FirstName_error'=>'',
            'passworde_error' => '',
            'LaststName_error'=>'',
            'Email_error'=>'',
            'phone_error'=>'',
            'confirm_password_error' => ''

        ];
        //load view
        $this->view('users/register',$data);
        }
    }
       //register login 
       public function login(){
        //check for POST
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //Process form

        }else{
            //Init Data 
        $data=[
           
            'Email'=> '',
            'password'=> '',
            'passworde_error' => '',        
            'Email_error'=>''

        ];
        //load view
        $this->view('users/login',$data);
        }
    }



}