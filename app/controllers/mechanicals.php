<?php

class mechanicals extends Controller
{
    public function __construct()
    {
        if (!isset($_SESSION['iduser'])) {
            redirect('users/login');
        }
        //load model client
        $this->mechanicalModel = $this->model('mechanical');
        
    }
     
      //mechanicalprofile
     
      public function mechanicalprofile(){
        $mechanical = $this->mechanicalModel->getmechanicalInfo();
                //  echo '<pre>';
                //  var_dump($mechanical);
                //  echo '</pre>';
                //  exit();
        $data = [
            'mechanical' => $mechanical,
        ];
  
        $this->view('mechanical/mechanicalprofile', $data);
      }

        // mechaniclist 
        public function mechaniclist(){
            $data = [
              'title' => 'mechaniclist '
            ];
      
            $this->view('mechanical/mechaniclist', $data);
          }
}