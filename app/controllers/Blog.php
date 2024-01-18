<?php 
class Blog extends Controller{
   
    public function getBlog(){
        print_r($_GET['id']);
    }
    public function index(){
        $this->view('blog','');
    }
} 
$blog = new Blog();
$blog->getBlog();