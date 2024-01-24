<?php 
    require "../app/models/Category.model.php";
    require "../app/models/Blog.model.php";
    require "../app/models/UpdateBlog.model.php";
class UpdateBlog extends Controller{
    use Category;
    use Blogs;
    use UpdateBlogData;
   public function updatedBlogData(){
    $error = [];
        if (isset($_POST['uploadBlog'])) {
            if (empty($_POST['heading'])) {
                $error['emptyHeading'] = "Please enter your Heading";
            }
            if (empty($_POST['selectCatagory'])) {
                $error['emptySelectCatagory'] = "Please enter your blog category";
            }
            if (empty($_POST['blog_content'])) {
                $error['emptyblogcContent'] = "Please enter your blog blog content";
            }
            if (!isset($_FILES['blog_image'])) {
                $error['emptyFile'] = "Please upload Image";
            }

        } else {
            $error['emptyForm'] = "Please fill the input from!";
        }
        return $error;
   }
     public function sendDataToServer(){   
        if (sizeof($this->updatedBlogData()) == 0) {
            $heading = filter_input(INPUT_POST, 'heading', FILTER_SANITIZE_STRING);
            $heading = $heading !== null ? trim($heading) : '';

            $blogContent = filter_input(INPUT_POST, 'blog_content', FILTER_SANITIZE_STRING);
            $blogContent = $blogContent !== null ? trim($blogContent) : '';
            $heading = $_POST['heading'];
            $blogCatagory = $_POST['selectCatagory'];
            $uploadedFile = $_FILES['blog_image'];
            if( $_FILES['blog_image']['name'] == null){
                $uploadedFile = $_SESSION['blogImage'];
            }
            $blogData =  ['heading' =>$heading,
                            'blogContent' => $blogContent,
                            'uploadedFile' => $uploadedFile,
                            'blogCatagory' => $blogCatagory,
                            'blogid' => $_GET['id']
                            ];
             
             $result = $this->UpdateBolgData($blogData);
             if($result){
                $location = "blog?id=".$_GET['id'];
                header("location:$location");
             }                        
    }
}

    public function accessBlogData()
    {   
        $userId = $_GET['id'];
        $blogData = $this->getSingleBlog($userId);
        $category =  $this->dataFromDB();
        $_SESSION['blogImage'] = $blogData[0]['image'];
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
$data = new UpdateBlog();
if(isset($_POST['uploadBlog'])){
$data->sendDataToServer();
}


