<?php
require "../app/models/Blog.model.php";
class Blog extends Controller
{   
    use Blogs;
    public function getBlog()
    {
        $blogId = $_GET['id'];
        $userId =  $_SESSION['user_id'];
        $result = $this->getSingleBlog($blogId);
        $blogCreatorId = $result[0]['user_id'];
        $userData =  $this->getBlogcreatorData($blogCreatorId);
        $commentData = $this->getAllCommentsFromDB($blogId);
        $likeData = $this->getblogLikeData($blogId,$userId);
        $isfollow = $this->isFollowing($userId);
        $blogData = [
            'blogCreated' => $userData['user_id'],
            'creatorName' => $userData['username'],
            'heading' => $result[0]['heading'],
            'content' => $result[0]['content'],
            'blogImage' => $result[0]['image'],
            'blogcratedAt' => $result[0]['created_at'],
            'userProfileImage' => $userData['profileimage'],
            'blogId' => $result[0]['blog_id'],
            'comment' => $commentData,
            'likeData'=>$likeData,
            'isFollowed' =>$isfollow
        ];
        return $blogData;
    }
    public function addComment()
    {
        if (isset($_POST['comment'])) {
            $commentData = [
                'blogId' => $_GET['id'],
                'userId' => $_SESSION['user_id'],
                'comment' => $_POST["comment"]
            ];
            $result = $this->addCommentToDb($commentData);
        }
    }
    public function index()
    { 
        $this->view('blog', $this->getBlog());
    }
}
$blog = new Blog();
if (isset($_POST['add'])) {
    $blog->addComment();
}
