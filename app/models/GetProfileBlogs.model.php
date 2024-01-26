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
    public function getUserFollow($userId){
       $Query = "SELECT
       COUNT(CASE WHEN follower = $userId THEN 1 END) as followers,
       COUNT(CASE WHEN following = $userId THEN 1 END) as following
     FROM follow;
     ";
       return $this->getCategoryFromDb($Query);
    }
}