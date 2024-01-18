<?php 
require "../app/models/Blog.model.php";
class Blog extends Controller{
    use Blogs;
    public function getBlog(){
        $blogId = $_GET['id'];
       return $this->getSingleBlog($blogId );
    }
    public function index(){
        $this->view('blog',$this->getBlog());
    }
} 
$blog = new Blog();
$blog->getBlog();