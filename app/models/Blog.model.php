<?php 
trait Blogs{
    use Model;
    public function getSingleBlog($blogId){
        $Query = "SELECT * FROM blogs WHERE blog_id = $blogId;";
        return $this->getCategoryFromDb($Query);
    }
}