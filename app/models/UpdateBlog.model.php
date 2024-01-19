<?php

trait UpdateBlogData{
    public function UpdateBolgData($blogData)
    {
        $heading = $blogData['heading'];
        $blogContent = $blogData['blogContent'];
        $blogCategory = $blogData['blogCatagory'];
        $blogImage = $blogData['uploadedFile'];
        if(is_array($blogImage)){
            $fileName = $blogImage['name'];
            $fileTmpName = $blogImage['tmp_name'];
            $uploadImage = "C:/xampp/htdocs/MVC-frameWork/public/assets/images/".$fileName;
            move_uploaded_file($fileTmpName, $uploadImage);
        }
        $fileName = $blogImage;
        $blogId = $blogData['blogid'];
          $Query = "UPDATE blogs SET 
          heading='$heading',content='$blogContent',category_id='$blogCategory',image='$fileName' WHERE blog_id = $blogId";
        $success = $this->insertIntoDb($Query);
        return $success;
    }
}