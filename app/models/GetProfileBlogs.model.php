<?php
trait GetProfileBlog{
    use Model;
    public function getBlogs($logedUserId){
        $Query = "SELECT * FROM blogs WHERE user_id = $logedUserId;";
        return $this->getCategoryFromDb($Query);
    }
    public function getUpdatedData(){
        $userId = $_SESSION['user_id'];
        $userData = ['user_id' => $userId]; 
        $Query= "SELECT * FROM users WHERE user_id = $userId;";
        echo $Query;
        $result =  $this->getdataFromDb($Query,$userData);
        return $result;
    }
}