<?php
class Users extends Controller
{

    public function __construct()
    {
        //Load model
        $this->userModel = $this->model('User');
        $this->mechanicalModel = $this->model('mechanical');
    }

    //start function for registerMechanical
    public function registerMechanical()
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
                'confirm_password' => trim($_POST['confirm_password']),
                'phone' => trim($_POST['phone']),
                'City' => trim($_POST['City']),
                'twitter' => trim($_POST['twitter']),
                'instagram' => trim($_POST['instagram']),
                'facebook' => trim($_POST['facebook']),
                'City_error' => '',
                'twitter_error' => '',
                'instagram_error' => '',
                'facebook_error' => '',
                'FirstName_error' => '',
                'password_error' => '',
                'LaststName_error' => '',
                'Email_error' => '',
                'phone_error' => '',
                'confirm_password_error' => '',
            ];

            
              //validate instagram
            if (empty($data['instagram'])) {
                $data['instagram_error'] = 'Please enter instagram';
            }
             //validate facebook
            if (empty($data['facebook'])) {
                $data['facebook_error'] = 'Please enter your facebook';
            }
            // Validate twitter
            if (empty($data['twitter'])) {
                $data['twitter_error'] = 'Please enter your twitter.';
            }
             // Validate City
             if (empty($data['City'])) {
                $data['City_error'] = 'Please enter your City.';
            }
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
                && empty($data['City_error']) && empty($data['twitter_error'])  && empty($data['instagram_error']) && empty($data['facebook_error'])
            ) {
                // SUCCESS - Proceed to insert

                // Hash Password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                //Execute

                if ($this->userModel->registermechanical($data)) {

                    // Redirect to login
                    $this->userModel->selectMechanicalId($data);
                    flash('register_success', 'You are now registered and can log in');
                    redirect('users/login');
                } else {
                    die('Something went wrong');
                }
            }else {
                // Load View
                $this->view('users/registerMechanical', $data);
            }
        } else {
            //Init Data 
            $data = [
                'FirstName' => '',
                'LastName' => '',
                'Email' => '',
                'password' => '',
                'confirm_password' => '',
                'phone' => '',
                'City' => '',
                'twitter' => '',
                'instagram' => '',
                'facebook' => '',
                'City_error' => '',
                'twitter_error' => '',
                'instagram_error' => '',
                'facebook_error' => '',
                'FirstName_error' => '',
                'password_error' => '',
                'LaststName_error' => '',
                'Email_error' => '',
                'phone_error' => '',
                'confirm_password_error' => '',

            ];
            //load view
            $this->view('users/registerMechanical', $data);
        }
    }
    //    end function for registerMechanical




    //register methode 
    public function registerClient()
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

                if ($this->userModel->registerclient($data)) {

                    // Redirect to login
                    $this->userModel->selectClientId($data);
                    flash('register_success', 'You are now registered and can log in');
                    redirect('users/login');
                } else {
                    die('Something went wrong');
                }
            } else {
                // Load View
                $this->view('users/registerClient', $data);
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
            $this->view('users/registerClient', $data);
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
            } else {
                // No User Found
                $data['Email_error'] = 'This email is not registered.';
            }
            // Make sure errors are empty
            if (empty($data['passworde_error'])  && empty($data['Email_error'])) {
                // SUCCESS - Proceed to login
                // Check and set logged in user
                $loggedInUser = $this->userModel->login($data['Email'], $data['password']);

                if ($loggedInUser) {
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
    public function createUserSession($user)
    {
        $_SESSION['iduser'] = $user->iduser;
        $_SESSION['user_email'] = $user->Email;
        $_SESSION['user_name'] = $user->FirstName;
        $_SESSION['mechanical'] = $user->fkmechanical;
        $_SESSION['client'] = $user->fkclient;
        if ($user->fkclient == null && $user->fkmechanical == null) {
            redirect('Dashbords/dashboard');
         }else{
            redirect('pages/index');
         }
    
 
     }

    // Logout & Destroy Session
    public function logout()
    {
        unset($_SESSION['iduser']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);
        session_destroy();
        redirect('users/login');
    }
   


    // insert to table messages
    public function sendMessage($idm)
    {
        
        //check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Process form
            // Sanitize POST
            //Init Data 
            
            $data = [
                'idm' => $idm,
                'content' => trim($_POST['content']),
                'content_error' => '',
                'iduser' => $_SESSION['iduser'],
                'iduser_error' => '',
               

            ];
            // echo '<pre>';
            // var_dump($data);
            // echo '</pre>';
            // exit;
            // Validate message
            if (empty($data['content'])) {
                $data['content_error'] = 'Please enter a content.';
            }
          
            // Make sure errors are empty
            if (empty($data['content_error'])) {
                // SUCCESS - Proceed to insert
                // Execute
                if ($this->userModel->SendMessage($data)) {
                    // Redirect to login
                    
                    redirect('mechanicals/mechaniclist');
                } 
                else {
                    die('Something went wrong');
                }
            } else {
                // Load View
                $this->view('mechanical/sendmessage', $data);
            }
        } else {
            //Init Data 
            $data = [
                'idm' => $idm,
                'content' => '',
                'content_error' => '',
                'iduser' => $_SESSION['iduser'],
                'iduser_error' => ''

            ];
            //load view
            $this->view('mechanical/sendmessage', $data);
        }
    }

    
    // insert to table messages
    public function sendreport($idm)
    {
        
        //check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Process form
            // Sanitize POST
            //Init Data 
            
            $data = [
                'idm' => $idm,
                'content' => trim($_POST['content']),
                'content_error' => '',
                'iduser' => $_SESSION['iduser'],
                'iduser_error' => ''

            ];
                     
          // Validate message
            if (empty($data['content'])) {
                $data['content_error'] = 'Please enter a content.';
            }
          
            // Make sure errors are empty
            if (empty($data['content_error'])) {
                // SUCCESS - Proceed to insert
                // Execute
                
                if ($this->userModel->report($data)) {
                    // Redirect to login
                    
                    redirect('mechanicals/mechaniclist');
                } 
                else {
                    die('Something went wrong');
                }
            } else {
                // Load View
                $this->view('mechanical/sendReport', $data);
            }
        } else {
            //Init Data 
            $data = [
                'idm' => $idm,
                'content' => '',
                'content_error' => '',
                'iduser' => $_SESSION['iduser'],
                'iduser_error' => ''

            ];
            //load view
            $this->view('mechanical/sendReport', $data);
        }
    }
   
    //  /insert to table feedback
    public function sendFeedback($idm)
    {
        
        //check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Process form
            // Sanitize POST
            //Init Data 
            
            $data = [
                'idm' => $idm,
                'content' => trim($_POST['content']),
                'content_error' => '',
                'iduser' => $_SESSION['iduser'],
                'iduser_error' => ''

            ];
            // Validate message
            if (empty($data['content'])) {
                $data['content_error'] = 'Please enter a content.';
            }
          
            // Make sure errors are empty
            if (empty($data['content_error'])) {
                // SUCCESS - Proceed to insert
                // Execute
                if ($this->userModel->sendFeedback($data)) {
                    // Redirect to login
                    
                    redirect('mechanicals/mechaniclist');
                } 
                else {
                    die('Something went wrong');
                }
            } else {
                // Load View
                $this->view('mechanical/sendFeedback', $data);
            }
        } else {
            //Init Data 
            $data = [
                'idm' => $idm,
                'content' => '',
                'content_error' => '',
                'iduser' => $_SESSION['iduser'],
                'iduser_error' => ''

            ];
            //load view
            $this->view('mechanical/sendFeedback', $data);
        }
    }

}
