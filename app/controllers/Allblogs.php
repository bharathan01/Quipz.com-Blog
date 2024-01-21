<?php
require "../app/models/GetAllBlogs.model.php";
require "../app/models/Category.model.php";
class Allblogs extends Controller
{
  use GetAllBlogs;
  use Category;
  public function  getBlogByCatagory()
  {
    if (isset($_GET['id'])) {
      $catagoryId = $_GET['id'];
      $blogs = $this->getCatagoryBlogs($catagoryId);
      $catagory = $this->dataFromDB();
      $result = [
        'blog' => $blogs,
        'catagory' => $catagory,
        "categoryId" => $_GET['id']
      ];
      return $result;

    } else {
      $blogs =  $this->getAllBlogsDB();
      $catagory = $catagory = $this->dataFromDB();
      $result = [
        'blog' => $blogs,
        'catagory' => $catagory,
        "categoryId" => ""
      ];
      return $result;
    }
  }
  public function index()
  {
    $this->view('blogs', $this->getBlogByCatagory());
  }
}
