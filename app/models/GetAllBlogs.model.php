<?php 
trait GetAllBlogs{
    use Model;
    public function getAllBlogsDB(){
        $Query = "SELECT * FROM blogs;";
        return $this->getCategoryFromDb($Query);
    }
} 