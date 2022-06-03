<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      $data = [
        'title' => 'fixeto',
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us'
      ];

      $this->view('pages/about', $data);
    }
 


    // mechaniclist 
    public function mechaniclist(){
      $data = [
        'title' => 'About Us'
      ];

      $this->view('pages/mechaniclist', $data);
    }
  }