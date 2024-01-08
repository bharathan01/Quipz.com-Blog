<?php
require "../app/models/Category.model.php";
class CreateBlog extends Controller{
    use Category;
    public function accessCategory(){
        $category = $this->dataFromDB();
    } 
    public function index()
    {
        $this->view('createblog', $this->dataFromDB());
    }
}
$getCatgory = new CreateBlog();
$getCatgory->accessCategory();