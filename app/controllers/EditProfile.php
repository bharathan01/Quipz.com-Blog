<?php
require "../app/models/UpdateProfile.model.php";
class EditProfile extends Controller
{
    use UpadateProfile;
    private function getUpdatedData()
    { 
        $error = [];
        if (isset($_POST['update'])) {
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
        }
        return $error;
    }
    public function sanitizeUserData()
    {    
            print_r($this->getUpdatedData());
            if (sizeof($this->getUpdatedData()) == 0) {
                $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
                $name = $name !== null ? trim($name) : '';

                $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
                $username = $username !== null ? trim($username) : '';

                $bio = filter_input(INPUT_POST, 'bio', FILTER_SANITIZE_STRING);
                
                $email = isset($_POST['email']) ? filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) : '';
                $email = $email !== null ? trim($email) : '';
               if(isset($_FILES["profileImage"]) ){
                $profileImage = $_FILES['profileImage'];
                }else{
                    $profileImage = $_SESSION['profileimage'];
                }
                $updateProfile =  [
                    'name' => $name,
                    'username' => $username,
                    'email' => $email,
                    'profileImage' => $profileImage,
                    'bio' => $bio
                ];
                $success = $this->updateProfile($updateProfile);
                if ($success) {
                    header("location: signin"); 
                }
            } 
        
    }
    public function index()
    {
        $this->view('editProfile', "");
    }
}
$edit = new EditProfile();
$edit->sanitizeUserData();