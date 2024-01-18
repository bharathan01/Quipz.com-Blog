<?php
trait GetProfileBlog{
    use Model;
    public function getBlogs($logedUserId){
        $Query = "SELECT * FROM blogs WHERE user_id = $logedUserId;";
        return $this->getCategoryFromDb($Query);
    }
}