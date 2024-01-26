<?php
trait Blogs
{
    use Model;
    public function getSingleBlog($blogId)
    {
        $Query = "SELECT * FROM blogs WHERE blog_id = $blogId;";
        return $this->getCategoryFromDb($Query);
    }
    public function getBlogcreatorData($userid)
    {
        $Query = "SELECT * from users WHERE user_id=:user_id;";
        $params = ["user_id" => $userid];
        $result = $this->getdataFromDb($Query, $params);
        return $result;
    }
    public function addCommentToDb($commentData)
    {
        $userId = $commentData['userId'];
        $blogId = $commentData['blogId'];
        $comment = $commentData['comment'];
        $Query = "INSERT INTO comments(user_id, blog_id, content) VALUES ($userId,$blogId,'$comment');";
        return $this->getCategoryFromDb($Query);
    }
    public function getAllCommentsFromDB($blogId)
    {
        $userId = $_SESSION['user_id'];
        $Query = "SELECT
        c.comment_id,
        c.blog_id,
        c.content,
        c.created_at,
        u.user_id,
        u.name,
        u.profileimage
    FROM
        comments as c
    JOIN
        users as u ON c.user_id = u.user_id
    WHERE
        c.blog_id = $blogId
    ORDER BY
        c.created_at DESC;";
        return $this->getCategoryFromDb($Query);
    }
    public function getblogLikeData($blogId, $userId)
    {
        $Query = "SELECT 
        (SELECT COUNT(*) FROM likes WHERE blog_id = l.blog_id) as total_likes,
        CASE WHEN (SELECT COUNT(*) FROM likes WHERE user_id = $userId AND blog_id = l.blog_id) > 0 THEN 1 ELSE 0 END as user_liked
      FROM likes l
      WHERE blog_id = $blogId LIMIT 1;";
        return $this->getCategoryFromDb($Query);
    }
    public function isUserFollow()
    {
    }
    public function isFollowing($userId){
        $Query = "SELECT CASE WHEN (SELECT COUNT(*) FROM follow WHERE following = $userId)>0 THEN 1 OR 0 END as isfollowing;";
        return $this->getCategoryFromDb($Query);
    }
}
