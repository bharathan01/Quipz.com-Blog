<?php include '../app/views/header.view.php' ?>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/singleblog.css">
  </head>
  <body>
    <section class="single_blog">
      <div class="bloge_image">
        <img src="<?= ROOT ?>/assets/images/<?= $data[0]['image'] ?>" alt="" srcset="" />
        <div class="auther_controlls">
            <button>Delete</button>
            <button>Update</button>
        </div>
      </div>
      <div class="who_wrote">
        <div class="auther">
            <div class="auther_image">
                <img src="" alt="" srcset="">
            </div>
            <span>name of the auther</span>
            <div class="follow">
                <button>Follow</button>
            </div>
        </div>
        <div class="posted">
            <span><?= $data[0]['created_at'] ?></span>
        </div>

      </div>
      <div class="blog_content">
        <div class="blog_heading">
            <h1><?= $data[0]['heading'] ?></h1>
        </div>
        <div class="blog_writeup">
          <p><?= $data[0]['content'] ?></p>
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
