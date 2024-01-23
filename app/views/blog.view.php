<?php include '../app/views/header.view.php' ?>
<link rel="stylesheet" href="<?= ROOT ?>/assets/css/singleblog.css">
</head>

<body>
  <section class="single_blog">
    <div class="bloge_image">
      <img src="<?= ROOT ?>/assets/images/<?= $data['blogImage'] ?>" alt="blog image" srcset="" />
      <?php if ($_SESSION['user_id'] === $data['blogCreated']) { ?>
        <div class="auther_controlls">
          <a href=""><button>Delete</button></a>
          <a href="updateBlog?id=<?= $data['blogId'] ?>"><button>Update</button></a>
        </div>
      <?php } ?>
    </div>
    <div class="who_wrote">
      <div class="auther">
        <div class="auther_image">
          <img src="<?= ROOT ?>/assets/images/<?= $data['userProfileImage'] ?>" alt="" srcset="">
        </div>
        <a href="profile?id=<?= $data['blogCreated'] ?>"><span><?= $data['creatorName'] ?></span></a>
        <div class="follow">
          <button id="follow" class="following">Follow</button>
        </div>
      </div>
      <div class="posted">
        <span><?= $data['blogcratedAt'] ?></span>
      </div>

    </div>
    <div class="blog_content">
      <div class="blog_heading">
        <h1><?= $data['heading'] ?></h1>
      </div>
      <div class="blog_writeup">
        <p><?= $data['content'] ?></p>
      </div>
    </div>
    <section class="comment" id="comment">
      <div class="comment-container">
        <h1>COMMENTS</h1>
        <div class="add-comment">
          <form action="" method="POST">
            <img class="comment-profile" src="<?= ROOT ?>/assets/images/<?= $_SESSION['profileimage'] ?>" alt="" />
            <textarea name="comment" id="comment" oninput="wrapTheText(this)" placeholder="add your comment.." cols="30" rows="10"></textarea>
            </textarea>
            <button type="submit" name="add"><ion-icon name="send-outline"></ion-icon></button>
          </form>
        </div>
       
        <?php if ($data['comment']) {
          foreach ($data['comment'] as $comment) { ?>
            <div class="added-comment">
              <div class="prifle-details">
                <a href="profile?id=<?=$comment['user_id']?>"><img class="comment-profile" src="<?= ROOT ?>/assets/images/<?= $comment['profileimage'] ?>" alt="" /></a>
                <div class="profile-name">
                <a href="profile?id=<?=$comment['user_id']?>"><h5><?= $comment['name']?></h5></a>
                  <span><?=$comment['created_at'] ?></span>
                </div>
                <div class="comment-like"><ion-icon name="heart-outline"></ion-icon></div>
              </div>
              <p>
                <?=$comment['content'] ?>
              </p>
              <?php if ($_SESSION['user_id'] === $comment['user_id']) { ?>
                <div class="comment-control">
                  <a href="">
                    <h4>Edit</h4>
                  </a>
                  <a href="">
                    <h4>Delete</h4>
                  </a>
                </div>
              <?php } ?>
            </div>
        <?php }
        } ?>
      </div>
    </section>

    <!-- <div class="blog_recommended">
      <div class="recommended_heading">
        <h1>recommended</h1>
      </div>
      <div class="recommended_blogs">
        <a href="">
          <div class="recommended_single_blog">
            <div class="blog_img">
              <img src="../images/img-4.jpg" alt="">
            </div>
            <div class="blog_discription">
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum error hic harum fugiat impedit pariatur.</p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="recommended_single_blog">
            <div class="blog_img">
              <img src="../images/img-4.jpg" alt="">
            </div>
            <div class="blog_discription">
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum error hic harum fugiat impedit pariatur.</p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="recommended_single_blog">
            <div class="blog_img">
              <img src="../images/img-4.jpg" alt="">
            </div>
            <div class="blog_discription">
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum error hic harum fugiat impedit pariatur.</p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="recommended_single_blog">
            <div class="blog_img">
              <img src="../images/img-4.jpg" alt="">
            </div>
            <div class="blog_discription">
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum error hic harum fugiat impedit pariatur.</p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="recommended_single_blog">
            <div class="blog_img">
              <img src="../images/img-4.jpg" alt="">
            </div>
            <div class="blog_discription">
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum error hic harum fugiat impedit pariatur.</p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="recommended_single_blog">
            <div class="blog_img">
              <img src="../images/img-4.jpg" alt="">
            </div>
            <div class="blog_discription">
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum error hic harum fugiat impedit pariatur.</p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="recommended_single_blog">
            <div class="blog_img">
              <img src="../images/img-4.jpg" alt="">
            </div>
            <div class="blog_discription">
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum error hic harum fugiat impedit pariatur.</p>
            </div>
          </div>
        </a>
      </div>
    </div> -->
  </section>
  <script>
    let followingId = "<?php echo $data['blogCreated'] ;?>"
    let followerId = "<?php echo $_SESSION['user_id'];?>"
    </script>
  <script src="<?= ROOT ?>/assets/js/singleblog.js"></script>
</body>
<?php require '../app/views/footer.view.php' ?>