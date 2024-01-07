<?php
require "../app/models/Signin.model.php";
class Signin extends Controller {
    use SigninModel;
    public $data;
    private function formDataValidation()
    {
        $error = [];
        if (isset($_POST['signin'])) {
            if (empty($_POST['username'])) {
                $error['emptyUserName'] = "Please enter your User name";
            }
            if (empty($_POST['pass'])) {
                $error['emptyPassword'] = "Please enter your Password";
            }
        } else {
            $error['emptyForm'] = "Please fill the input from!";
        }
        return $error;
    }
    public function sanitizeInputField()
    {   
        if (sizeof($this->formDataValidation()) == 0) {
            $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
            $username = $username !== null ? trim($username) : '';

            $password = isset($_POST['pass']) ? trim($_POST['pass']) : '';

            $signinData =  [
                            'username' => $username,
                            'password' => $password];                               
            $success = $this->dataIntoDB($signinData);
            if($success){
                print_r($success);
                header('location:home');
            }                
        } else {
            $this->data = $this->formDataValidation();
        }
    }
    public function index(){
        $this->view('signin',$this->formDataValidation());
    }
}
$form = new Signin();
$form->sanitizeInputField();