<?php
require "../app/models/Signup.model.php";
class Signup extends Controller
{   
    use SigninModel;
    public $data;
    private function formDataValidation()
    {
        $error = [];
        if (isset($_POST['signup'])) {
            if (empty($_POST['name'])) {
                $error['emptyName'] = "Please enter your Name";
            }
            if (empty($_POST['username'])) {
                $error['emptyUserName'] = "Please enter your User name";
            }
            if (empty($_POST['email'])) {
                $error['emptyEmail'] = "Please enter your Email";
            } else {
                if (filter_var('email', FILTER_VALIDATE_EMAIL)) {
                    $error['notCorrectEmail'] = "Please enter valid Email";
                }
            }
            if (empty($_POST['pass'])) {
                $error['emptyPassword'] = "Please enter your Password";
            } else {
                if (strlen($_POST['pass']) < 6) {
                    $error['PasswordLength'] = "Password must have 6 letters";
                }
            }
            if (empty($_POST['re_pass'])) {
                $error['emptyRePassword'] = "Please Re-enter your Password";
            } else {
                if ($_POST['pass'] !== $_POST['re_pass']) {
                    $error['passwordNotMatch'] = "Password is not matching";
                }
            }
            if (!isset($_POST['agree_term'])) {
                $error['emptyAgreeTerm'] = "Please select the terms and conditions";
            }
        } else {
            $error['emptyForm'] = "Please fill the input from!";
        }
        return $error;
    }
    public function sanitizeInputField()
    {   
        if (sizeof($this->formDataValidation()) == 0) {
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $name = $name !== null ? trim($name) : '';

            $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
            $username = $username !== null ? trim($username) : '';

            $email = isset($_POST['email']) ? filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) : '';
            $email = $email !== null ? trim($email) : '';

            $password = isset($_POST['pass']) ? trim($_POST['pass']) : '';

            $signInData =  ['name' =>$name,
                            'username' => $username,
                            'email' => $email,
                            'password' => $password];
            $success = $this->dataIntoDB($signInData);
            echo $success;
            if($success){
                header("location: signin"); 
            }                
        } else {
            $this->data = $this->formDataValidation();
        }
    }
    public function index()
    {
        $this->view('signup', $this->formDataValidation());
    }
}

$form = new Signup();
$form->sanitizeInputField();
