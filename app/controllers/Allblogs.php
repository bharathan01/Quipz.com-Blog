<?php 
 require "../app/models/GetAllBlogs.model.php";
class Allblogs extends Controller{
  use GetAllBlogs;
    public function index(){
        $this->view('blogs',$this->getAllBlogsDB());
    }
} 
