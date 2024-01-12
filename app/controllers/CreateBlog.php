<?php
require "../app/models/Category.model.php";
require "../app/models/UploadBlog.model.php";

class CreateBlog extends Controller
{
    use UploadBlog;
    use Category;
    private function blogDataProcess()
    {  
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
    public function sendDataToServer()  {   
        if (sizeof($this->blogDataProcess()) == 0) {
            $heading = filter_input(INPUT_POST, 'heading', FILTER_SANITIZE_STRING);
            $heading = $heading !== null ? trim($heading) : '';

            $blogContent = filter_input(INPUT_POST, 'blog_content', FILTER_SANITIZE_STRING);
            $blogContent = $blogContent !== null ? trim($blogContent) : '';
            $heading = $_POST['heading'];
            $blogCatagory = $_POST['selectCatagory'];
            $uploadedFile = $_FILES['blog_image'];
            $blogData =  ['heading' =>$heading,
                            'blogContent' => $blogContent,
                            'uploadedFile' => $uploadedFile,
                            'blogCatagory' => $blogCatagory,
                            ];
            $result =  $this->uploadBolg($blogData);
            if($result){
                echo "<p>okk</p>";
                header("location:profile");
            }            
    }
}
    public function accessCategory()
    {   
        $category =  $this->dataFromDB();
        return $category;
    }
    public function index()
    {
        $this->view('createblog', $this->accessCategory());
    }

}
$getCatgory = new CreateBlog();
$getCatgory->sendDataToServer();
