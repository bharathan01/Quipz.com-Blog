<?php
require "../app/models/GetProfileBlogs.model.php";
class Profile extends Controller{
    use GetProfileBlog;
    public function getLogedInUserBlogs(){
        $logedUserId = $_SESSION['user_id'];
        return $this->getBlogs($logedUserId);
    }
    public function index()
    {  
        $this->view('profile', $this->getLogedInUserBlogs());
    }
}
$Profile = new Profile();