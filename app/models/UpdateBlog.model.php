<?php

trait UpdateBlogData{
    public function UpdateBolgData($blogData)
    {
        $heading = $blogData['heading'];
        $blogContent = $blogData['blogContent'];
        $blogImage = $blogData['uploadedFile'];
        $blogCategory = $blogData['blogCatagory'];
        $fileName = $blogImage['name'];
        $fileTmpName = $blogImage['tmp_name'];
        $blogId = $blogData['blogid'];
        $uploadImage = "C:/xampp/htdocs/MVC-frameWork/public/assets/images/".$fileName;
        move_uploaded_file($fileTmpName, $uploadImage);
          $Query = "UPDATE blogs SET 
          heading='$heading',content='$blogContent',category_id='$blogCategory',image='$fileName' WHERE blog_id = $blogId";
        $success = $this->insertIntoDb($Query);
        return $success;
    }
}