<?php
require "../app/models/GetProfileBlogs.model.php";
class Profile extends Controller{
    use GetProfileBlog;
    public function getLogedInUserBlogs(){
        $userId = $_GET['id'];
        $userData = $this->getUserData($userId);
        $userBlogData = $this->getBlogs($userId);
        $followerData = $this->getUserFollow($userId);
        $userProfileData = [
            'userId' =>$userData['user_id'],
            'email' =>$userData['email'],
            'bio' =>$userData['bio'],
            'profileimage' =>$userData['profileimage'],
            'username' =>$userData['username'],
            'name' => $userData['name'],
            'blogData' =>isset($userBlogData) ? $userData :0,
            'followerData' => $followerData[0]
        ];
        return $userProfileData;
    }
    public function index()
    {  
        $this->view('profile', $this->getLogedInUserBlogs());
    }
}
$Profile = new Profile();