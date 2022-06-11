<?php

class Clients extends Controller {
    public function __construct(){
        if(!isset($_SESSION['iduser'])){
          redirect('users/login');
        }
       //load model client
         $this->clientModel = $this->model('Client');
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


}