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
        $this->userModel = $this->model('User');
    }

    //mechanicalprofile
    public function mechanicalprofile()
    {
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
    public function mechaniclist()
    {
        $Allmechanical = $this->mechanicalModel->getAllmechanicalInfo();
        //  echo '<pre>';
        //  var_dump($Allmechanical);
        //  echo '</pre>';
        //  exit();
        $data = [
            'Allmechanical' => $Allmechanical,
        ];
        $this->view('mechanical/mechaniclist', $data);//got to view
    }
    //delet mechanical
    public function deletemechanical($idm)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Execute
            if ($this->mechanicalModel->delete($idm)) {
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
            //redirect to mechanicalprofile
            redirect('mechanical/mechanicalprofile');
        }
    }

    public function Editmechanical($idm)
    {
        //check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Process form
            // Sanitize POST
            $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            //Init Data 
            $data = [
                'idm' => $idm,
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

                if ($this->mechanicalModel->Edit($data)) {
                    //redirect to mechanicalprofile
                    redirect('mechanicals/mechanicalprofile');
                } else {
                    die('Something went wrong');
                }
            } else {
                // Load View
                $this->view('mechanical/edit', $data);
            }
        } else {
            //Init Data 
            //get client info
            $mechanical = $this->mechanicalModel->getmechanicalInfo();

            $data = [
                'idm' => $idm,
                'FirstName' => $mechanical->FirstName,
                'LastName' => $mechanical->LastName,
                'Email' => $mechanical->Email,
                'password' => '',
                'confirm_password' => '',
                'phone' => $mechanical->phone,
                'City' => $mechanical->City,
                'twitter' => $mechanical->twitter,
                'instagram' => $mechanical->instagram,
                'facebook' => $mechanical->facebook,
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
            //   echo '<pre>';
            //   var_dump($data);
            //   echo '</pre>';
            //   exit();
            //load view
            $this->view('mechanical/edit', $data);
        }
    }
    // get mechanical info by idm 
    public function mechanicalprofileByid($idm)
    {
        $mechanicalbyid = $this->mechanicalModel->getmechanicalInfoById($idm);
        //  echo '<pre>';
        //  var_dump($mechanicalbyid);
        //  echo '</pre>';
        //  exit();
        $data = [
            'mechanical' => $mechanicalbyid,
        ];

        $this->view('mechanical/mechanicalprofile', $data);
    }

    
}
