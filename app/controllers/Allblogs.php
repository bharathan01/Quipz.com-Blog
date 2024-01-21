<?php
require "../app/models/GetAllBlogs.model.php";
class Allblogs extends Controller
{
  use GetAllBlogs;

  public function  getBlogByCatagory()
  {
    if (isset($_GET['id'])) {
      $catagoryId = $_GET['id'];
      return $this->getCatagoryBlogs($catagoryId);
    } else {
      return $this->getAllBlogsDB();
    }
  }
  public function index()
  {
    $this->view('blogs', $this->getBlogByCatagory());
  }
}
