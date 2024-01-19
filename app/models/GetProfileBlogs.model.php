<?php
trait GetProfileBlog{
    use Model;
    public function getUserData($userId){
        $Query = "SELECT * from users WHERE user_id=:user_id;";
       $params = ["user_id" => $userId];
       $result = $this->getdataFromDb($Query,$params);
       return $result;
    }
    public function getBlogs($logedUserId){
        $Query = "SELECT * FROM blogs WHERE user_id = $logedUserId;";
        return $this->getCategoryFromDb($Query);
    }
}