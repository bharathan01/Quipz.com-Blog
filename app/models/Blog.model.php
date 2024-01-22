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
    public function addCommentToDb($commentData){
       $userId = $commentData['userId'];
       $blogId = $commentData['blogId'];
       $comment = $commentData['comment']; 
       $Query = "INSERT INTO comments(user_id, blog_id, content) VALUES ($userId,$blogId,'$comment');";
        return $this->getCategoryFromDb($Query);
    }
    public function getAllCommentsFromDB($blogId){
        $Query = "SELECT * FROM comments WHERE blog_id = $blogId;";
        return $this->getCategoryFromDb($Query);
    }
}