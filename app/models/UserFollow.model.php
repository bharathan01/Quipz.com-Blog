<?php 
trait UserFollow{
    use Model;
    public function isUserFollowed($followDetails){
        $whoFollowed = $followDetails['whoFollowed'];
        $whomToFollow = $followDetails['whomToFollow'];
        $Query = "INSERT INTO follow(follower, following) VALUES ($whoFollowed,$whomToFollow);";
        $this->insertIntoDb($Query);
    }
    public function isUserUnFollowed($followDetails){
        $whoFollowed = $followDetails['whoFollowed'];
        $whomToFollow = $followDetails['whomToFollow'];
        $Query = "DELETE FROM follow WHERE follower = $whoFollowed AND following = $whomToFollow;";
        $this->insertIntoDb($Query);
    }
    public function isUserlike($followDetails){
        $whoFollowed = $followDetails['whoFollowed'];
        $whomToFollow = $followDetails['whomToFollow'];
        $Query = "INSERT INTO likes(user_id,blog_id) VALUES ($whoFollowed,$whomToFollow);";
        $this->insertIntoDb($Query);
    }
    public function isUserUnlike($followDetails){
        $whoFollowed = $followDetails['whoFollowed'];
        $whomToFollow = $followDetails['whomToFollow'];
        $Query = "DELETE FROM likes WHERE user_id = $whoFollowed AND blog_id = $whomToFollow;";
        $this->insertIntoDb($Query);
    }
}