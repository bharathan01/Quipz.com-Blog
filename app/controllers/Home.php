<?php
require "../app/models/GetAllBlogs.model.php";
require "../app/models/Category.model.php";
class Home extends Controller
{
    use GetAllBlogs;
    use Category;
    public function getCatagoryViseBlog()
    {
        $allBlogs =  $this->getAllBlogsDB();
        $catagory = $this->dataFromDB();
        $filteredData = [];
        foreach ($catagory as $category) {
            $categoryId = $category['category_id'];
            $filteredData[$category['name']] = array_filter($allBlogs, function ($blog) use ($categoryId) {
                return $blog['category_id'] === $categoryId;
            });
        }
        return $filteredData;
    }
    public function index()
    {
        $this->view('home', $this->getCatagoryViseBlog());
    }
}
$home = new Home();
$home->getCatagoryViseBlog();