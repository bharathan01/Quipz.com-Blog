<?php 
    require "../app/models/Category.model.php";
    require "../app/models/Blog.model.php";
class UpdateBlog extends Controller{
    use Category;
    use Blogs;
    public function accessBlogData()
    {   
        $userId = $_GET['id'];
        $blogData = $this->getSingleBlog($userId);
        $category =  $this->dataFromDB();
        $updateBlogData = [
            'heading' => $blogData[0]['heading'],
            'content' => $blogData[0]['content'],
            'blogImage' => $blogData[0]['image'],
            'blogcategory'=>$blogData[0]['category_id'],
            'category'=> $category
        ];
        return $updateBlogData;
    }
    public function index(){
        $this->view('updateBlog',$this->accessBlogData());
    }
} 
