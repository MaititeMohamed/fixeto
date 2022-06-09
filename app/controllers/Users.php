<?php
class Users extends Controller
{

    public function __construct()
    {
        //Load model
        $this->userModel = $this->model('User');
    }
    //register methode 
    public function register()
    {
        //check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Process form
            // Sanitize POST
            $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            //Init Data 
            $data = [
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
            } else {
                // check if email  exist
                if ($this->userModel->findUserByEmail($data['Email'])) {
                    $data['Email_error'] = 'Email is already exist';
                }
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
                if ($this->userModel->register($data)) {
                    //add To User table 
                    // $this->userModel->addTotableUser($data['Email']);
                    // Redirect to login
                    flash('register_success', 'You are now registered and can log in');
                    redirect('users/login');
                } else {
                    die('Something went wrong');
                }
            } else {
                // Load View
                $this->view('users/register', $data);
            }
        } else {
            //Init Data 
            $data = [
                'FirstName' => '',
                'LastName' => '',
                'Email' => '',
                'password' => '',
                'phone' => '',
                'confirm_password' => '',
                
                'FirstName_error' => '',
                'passworde_error' => '',
                'LaststName_error' => '',
                'Email_error' => '',
                'phone_error' => '',
                'confirm_password_error' => '',
                
            ];
            //load view
            $this->view('users/register', $data);
        }
    }

    // login 
    public function login()
    {
        //check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Process form
            // Sanitize POST
            $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            //Init Data 
            $data = [

                'Email' => trim($_POST['Email']),
                'password' => trim($_POST['password']),
                'password_error' => '',
                'Email_error' => ''

            ];
            // Validate email
            if (empty($data['Email'])) {
                $data['Email_error'] = 'Please enter an email';
            } 

            // Validate password
            if (empty($data['password'])) {
                $data['password_error'] = 'Please enter a password.';
            }
           


            // Check for user/mail exist or note
            if ($this->userModel->findUserByEmail($data['Email'])) {
                  // User Found
            }else {
                // No User Found
                $data['Email_error'] = 'This email is not registered.';
              }
  


            // Make sure errors are empty
            if (empty($data['passworde_error'])  && empty($data['Email_error']) ) {
                // SUCCESS - Proceed to login
 
                 // Check and set logged in user
               
                 $loggedInUser = $this->userModel->login($data['Email'],$data['password']);
                
                 if($loggedInUser){
                    // User Authenticated!
                    $this->createUserSession($loggedInUser);
                  } else {
                    $data['password_error'] = 'Password incorrect.';
                    // Load View withe errors
                    $this->view('users/login', $data);
                  }
            } else {
                // Load View
                $this->view('users/login', $data);
            }
        } else {
            //Init Data 
            $data = [

                'Email' => '',
                'password' => '',
                'passworde_error' => '',
                'Email_error' => ''

            ];
            //load view
            $this->view('users/login', $data);
        }
    }


                    // Create Session With User Info
                public function createUserSession($user){
                    $_SESSION['iduser'] = $user->idC;
                    $_SESSION['user_email'] = $user->Email; 
                    $_SESSION['user_name'] = $user->FirstName;
                    redirect('pages/mechanicalprofile');
                }
                
                // Logout & Destroy Session
                public function logout(){
                    unset($_SESSION['iduser']);
                    unset($_SESSION['user_email']);
                    unset($_SESSION['user_name']);
                    session_destroy();
                    redirect('users/login');
                }
                
                // Check Logged In
                public function isLoggedIn(){
                    if(isset($_SESSION['iduser'])){
                    return true;
                    } else {
                    return false;
                    }
                }
}
