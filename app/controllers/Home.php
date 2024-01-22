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
        $topNews = $this->getTopNews();
        $data = [
             'filteredData' => $filteredData,
             'topNews' => $topNews
        ];
        return $data;
    }
    public function getTopNews()
    {
        $apiUrl =  'https://newsapi.org/v2/top-headlines?country=us&apiKey=6bc8abc0c59448398611dd71b598c9e1';
        $ch = curl_init($apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERAGENT, 'localhost');
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Curl error: ' . curl_error($ch);
        }
        curl_close($ch);
        $data = json_decode($response, true);
        return $data['articles'];
    }
    public function index()
    {
        $this->view('home', $this->getCatagoryViseBlog());
    }
}
$home = new Home();
$home->getTopNews();
$home->getCatagoryViseBlog();
