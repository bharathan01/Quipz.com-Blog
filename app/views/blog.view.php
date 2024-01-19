<?php include '../app/views/header.view.php' ?>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/singleblog.css">
  </head>
  <body>
    <section class="single_blog">
      <div class="bloge_image">
        <img src="<?= ROOT ?>/assets/images/<?= $data['blogImage'] ?>" alt="blog image" srcset="" />
        <?php if($_SESSION['user_id'] === $data['blogCreated']){ ?>
        <div class="auther_controlls">
            <a href=""><button>Delete</button></a>
            <a href="updateBlog?id=<?=$data['blogId']?>"><button>Update</button></a>
        </div>
        <?php }?>
      </div>
      <div class="who_wrote">
        <div class="auther">
            <div class="auther_image">
                <img src="<?= ROOT ?>/assets/images/<?= $data['userProfileImage'] ?>" alt="" srcset="">
            </div>
            <a href="profile?id=<?=$data['blogCreated']?>"><span><?= $data['creatorName'] ?></span></a>
            <div class="follow">
                <button>Follow</button>
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
      <div class="blog_recommended">
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
      </div>
    </section>
    <!-- <script src="<?= ROOT ?>/assets/js/.js"></script> -->
  </body>
  <?php require '../app/views/footer.view.php' ?>
