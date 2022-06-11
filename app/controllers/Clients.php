<?php

class Clients extends Controller {
    public function __construct(){
        if(!isset($_SESSION['iduser'])){
          redirect('users/login');
        }
       //load model client
         $this->clientModel = $this->model('Client');
         // load model user we gan a use it for destroy session
            $this->userModel = $this->model('User');
      }

public function index()
{ 
    //git client
    $clients = $this->clientModel->getClientInfo();
    
//    echo '<pre>';
//     var_dump($clients);
//     echo '</pre>';
//   exit();
    $data =[
        'client' => $clients,
    ];

    $this->view('clients/index',$data);
}




 // Delete client
 public function deleteClient($idC){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      //Execute
      if($this->clientModel->deleteClient($idC)){
        //destroy session
        unset($_SESSION['iduser']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);
        session_destroy();
        // Redirect to login
        flash('client_message', 'clien Removed');
        redirect('users/login');
        } else {
          die('Something went wrong');
        }
    } else {
      redirect('Clients/index');
    }
  }


}