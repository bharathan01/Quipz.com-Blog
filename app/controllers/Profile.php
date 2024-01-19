<?php
require "../app/models/GetProfileBlogs.model.php";
class Profile extends Controller{
    use GetProfileBlog;
    public function getLogedInUserBlogs(){
        $userId = $_GET['id'];
        $userData = $this->getUserData($userId);
        $userBlogData = $this->getBlogs($userId);
        $userProfileData = [
            'userId' =>$userData['user_id'],
            'email' =>$userData['email'],
            'bio' =>$userData['bio'],
            'profileimage' =>$userData['profileimage'],
            'username' =>$userData['username'],
            'name' => $userData['name'],
            'blogData' =>$userBlogData
        ];
        return $userProfileData;
    }
    public function index()
    {  
        $this->view('profile', $this->getLogedInUserBlogs());
    }
}
$Profile = new Profile();