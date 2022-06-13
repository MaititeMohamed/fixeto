<?php
  class Dashbords extends Controller {
    public function __construct(){
     
    }
    
 

    
    // dashboard
    public function dashboard(){
      $data = [
        'title' => 'dashboard '
      ];

      $this->view('dashboards/dashboard', $data);
    }

  }