<?php
require "../app/models/Category.model.php";

class CreateBlog extends Controller
{   
    use Category;
    public function blogDataProcess(){
        if(isset($_POST['uploadBlog'])){
            echo "data";
        }
        else{
            echo "no data";
        }
    }
    public function accessCategory()
    {
        $category = $this->dataFromDB();
    }
    public function index()
    {
        $this->view('createblog', $this->dataFromDB());
    }
}
$getCatgory = new CreateBlog();
$getCatgory->accessCategory();
