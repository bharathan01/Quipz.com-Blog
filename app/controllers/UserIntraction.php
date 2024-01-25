<?php
 require "../app/models/UserFollow.model.php";
class UserIntraction extends Controller
{   
    use UserFollow;
    public function index()
    {
        if (isset($_POST['whoFollowed']) && ! $_POST['whomFollowed'] =='') {
            $this->userFollow();
        }
        if(isset($_POST['whoFollowed']) && ! $_POST['blogId']==''){
            $this->userLike();
        }
        $this->view('UserIntraction', "");
    }
    public function userFollow()
    {
        $followerDetails = [
            'whoFollowed' => $_POST['whoFollowed'],
            'whomToFollow' => $_POST['whomFollowed']
        ];
        $isfollow = $_POST['isfollow'];
        if($isfollow == 'true'){
            echo "follow";
            $this->isUserFollowed($followerDetails);
        }else{
            echo "unfollow";
            $this->isUserUnFollowed($followerDetails);
        }
    }
    public function userLike(){
        $followerDetails = [
            'whoFollowed' => $_POST['whoFollowed'],
            'whomToFollow' => $_POST['blogId']
        ];
        $isfollow = $_POST['isfollow'];
        if($isfollow == 'true'){
            $this->isUserlike($followerDetails);
        }else{
            $this->isUserUnlike($followerDetails);
        }
    }
}
