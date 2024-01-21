<?php 
trait GetAllBlogs{
    use Model;
    public function getAllBlogsDB(){
        $Query = "SELECT * FROM blogs;";
        return $this->getCategoryFromDb($Query);
    }
    public function getCatagoryBlogs($catagoryId){
        $Query = "SELECT * FROM blogs WHERE category_id = $catagoryId;";
        return $this->getCategoryFromDb($Query);
    }
} 