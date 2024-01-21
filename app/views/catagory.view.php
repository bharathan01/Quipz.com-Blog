<link rel="stylesheet" href="<?= ROOT ?>/assets/css/catagory.css">

<section class="sixth_page">
  <div class="category">
    <?php foreach ($data as $catagoryName => $blogs) { ?>
      <?php if ($blogs) { ?>
        <div class="category_div category_lifestyle">
          <div class="category_heading">
            <h2><?= $catagoryName ?></h2>
            <a href="allblogs?id=<?php foreach ($blogs  as $blog) {
                                    echo $blog['category_id'];
                                  } ?>"><button>see more</button></a>
          </div>
          <div class="category_container">
            <?php foreach ($blogs  as $blog) { ?>
              <a href="blog?id=<?= $blog['blog_id'] ?>">
                <div class="container_div">
                  <img src="<?= ROOT ?>/assets/images/<?= $blog['image'] ?>" alt="">
                  <h5><?= $blog['heading'] ?></h5>
                </div>
              </a>
            <?php } ?>
          </div>
      <?php }
    } ?>
        </div>
  </div>
</section>