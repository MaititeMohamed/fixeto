<?php
class Users extends Controller{
         
public function __construct()
{
    
}

public function register(){
    //check for POST
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //Process form

    }else{
        //load form
        echo 'load form';
    }
}


}