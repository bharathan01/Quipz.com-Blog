<?php 
trait Blogs{
    use Model;
    public function getSingleBlog($blogId){
        $Query = "SELECT * FROM blogs WHERE blog_id = $blogId;";
        return $this->getCategoryFromDb($Query);
    }
    public function getBlogcreatorData($userid){
       $Query = "SELECT * from users WHERE user_id=:user_id;";
       $params = ["user_id" => $userid];
       $result = $this->getdataFromDb($Query,$params);
       return $result;
    }
}