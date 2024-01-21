<?php 
require "../app/models/GetAllBlogs.model.php";
require "../app/models/Category.model.php";
class Home extends Controller{
   use GetAllBlogs;
   use Category;
   public function getCatagoryViseBlog(){
     $allBlogs =  $this->getAllBlogsDB();
     $catagory = $this->dataFromDB();
     foreach($allBlogs as $blogName => $blogs){
         foreach($catagory as $catagoryName => $catagory){
            if($blogs["category_id"] == $catagory['category_id'] ){
                // $catagory['name'] = $allBlogs[$blogName];
                print_r($catagory['name']);
             }
         }
     }
    // foreach($catagory as $catagoryName => $catagory){
    //     print_r($catagory['name']);
    // }
   }
    public function index(){
        $this->view('home',"");
    }
} 
$home = new Home();
$home->getCatagoryViseBlog();


// 1000
// Current
// 1001
// National
// 1002
// International

// 1003
// Economy
	

// 1004
// Technology

// 1005
// Lifestyle

// 1006
// Business

// 1007
// Food