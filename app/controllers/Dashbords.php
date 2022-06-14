<?php
class Dashbords extends Controller
{
  public function __construct()
  {
    if (!isset($_SESSION['iduser'])) {
      redirect('users/login');
    }
    //load Dashboard model
    $this->dashboardModel = $this->model('Dashboard');

    // load model user we gan a use it for destroy session
    $this->userModel = $this->model('User');
  }



  // dashboard
  public function dashboard()
  {
    //git client
    $NumberofUsers = $this->dashboardModel-> getNumberOfUsers();
    $NumberofClients = $this->dashboardModel-> getNumberOfClients();
    $NumberofMechanicals = $this->dashboardModel-> getNumberOfMechanicals();
    $InActivemechanicalInfo = $this->dashboardModel-> getInActivemechanicalInfo();
    
      //  echo '<pre>';
      //   var_dump($InActivemechanicalInfo);
      //   echo '</pre>';
      // exit();
    $data = [
      'Numberofmechanicals' =>$NumberofMechanicals,
      'NumberofClients' => $NumberofClients,
      'NumberofUsers' => $NumberofUsers,
      'InActivemechanicalInfo' => $InActivemechanicalInfo
    ];


    $this->view('dashboards/dashboard', $data);
  }

  // create methode setActive
public function setActive($idm)
{
  $this->dashboardModel->setActive($idm);
  
  redirect('dashboards/dashboard');
}
}
