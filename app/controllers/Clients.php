<?php

class Clients extends Controller
{
    public function __construct()
    {
        if (!isset($_SESSION['iduser'])) {
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
        $data = [
            'client' => $clients,
        ];

        $this->view('clients/index', $data);
    }




    // Delete client
    public function deleteClient($idC)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Execute
            if ($this->clientModel->deleteClient($idC)) {
                //destroy session
                unset($_SESSION['iduser']);
                unset($_SESSION['user_email']);
                unset($_SESSION['user_name']);
                session_destroy();
                // Redirect to login
                flash('client_message','clien Removed');
                redirect('users/login');
            } else {
                die('Something went wrong');
            }
        } else {
            redirect('Clients/index');
        }
    }


 
 
 

    //edit methode 
    public function EditClient($idC)
    {
        //check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Process form
            // Sanitize POST
            $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
            //Init Data 
            $data = [
                'idC'=>$idC,
                'FirstName' => trim($_POST['FirstName']),
                'LastName' => trim($_POST['LastName']),
                'Email' => trim($_POST['Email']),
                'password' => trim($_POST['password']),
                'phone' => trim($_POST['phone']),
                'confirm_password' => trim($_POST['confirm_password']),
                'FirstName_error' => '',
                'password_error' => '',
                'LaststName_error' => '',
                'Email_error' => '',
                'phone_error' => '',
                'confirm_password_error' => '',
            ];
           
            // Validate FirstName
            if (empty($data['FirstName'])) {
                $data['FirstName_error'] = 'Please enter your FirstName.';
            }
            // Validate LastName
            if (empty($data['LastName'])) {
                $data['LastName_error'] = 'Please enter your LastName.';
            }
            // Validate phone
            if (empty($data['phone'])) {
                $data['phone_error'] = 'Please enter your phone.';
            }
            // Validate email
            if (empty($data['Email'])) {
                $data['Email_error'] = 'Please enter an email';
            } 
            // Validate password
            if (empty($data['password'])) {
                $data['password_error'] = 'Please enter a password.';
            } elseif (strlen($data['password']) < 6) {
                $data['password_error'] = 'Password must have atleast 6 characters.';
            }
            // Validate confirm password
            if (empty($data['confirm_password'])) {
                $data['confirm_password_error'] = 'Please confirm password.';
            } else {
                if ($data['password'] != $data['confirm_password']) {
                    $data['confirm_password_error'] = 'Password do not match.';
                }
            }
            // Make sure errors are empty
            if (
                empty($data['FirstName_error']) && empty($data['passworde_error']) && empty($data['LaststName_error'])
                && empty($data['Email_error'])  && empty($data['phone_error'])  && empty($data['confirm_password_error'])
            ) {
                // SUCCESS - Proceed to insert
                // Hash Password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                //Execute

                if ($this->clientModel->Edit($data)) {

                    // Redirect to INDEX
                    redirect('clients/index');
                } else {
                    die('Something went wrong');
                }
            } else {
                // Load View wite errors 
                $this->view('clients/edit', $data);
            }
        } else {
            //get client info
            $clients = $this->clientModel->getClientInfo();
           
            //Init Data 
            $data = [
                'idC'=>$idC,
                'FirstName' =>$clients->FirstName, 
                'LastName' => $clients->LastName,
                'Email' => $clients->Email,
                'password' =>'',
                'phone' =>  $clients->phone,
                'confirm_password' => '',
                'FirstName_error' => '',
                'passworde_error' => '',
                'LaststName_error' => '',
                'Email_error' => '',
                'phone_error' => '',
                'confirm_password_error' => '',

            ];
           
            //load view
            $this->view('clients/edit', $data);
        }
    }
   
}
