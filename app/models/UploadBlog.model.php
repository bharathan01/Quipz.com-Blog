<?php

trait UploadBlog
{
    use Model;
    public function uploadBolg($blogData)
    {
        $heading = $blogData['heading'];
        $blogContent = $blogData['blogContent'];
        $blogImage = $blogData['uploadedFile'];
        $blogCategory = $blogData['blogCatagory'];
        $fileName = $blogImage['name'];
        $fileTmpName = $blogImage['tmp_name'];
        $userId = $_SESSION['user_id'];
        $uploadImage = "C:/xampp/htdocs/MVC-frameWork/public/assets/images/".$fileName;
        move_uploaded_file($fileTmpName, $uploadImage);
        $Query = "INSERT INTO blogs(heading, content, user_id, category_id,image) 
          VALUES ('$heading','$blogContent',$userId,$blogCategory,'$fileName');";
        $success = $this->insertIntoDb($Query);
        return $success;
    }
}
