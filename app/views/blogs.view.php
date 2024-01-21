<?php include '../app/views/header.view.php' ?>
<link rel="stylesheet" href="<?= ROOT ?>/assets/css/blogs.css">
<section>
<?php
    
  
    foreach ($data['catagory'] as $category) { 
        if ($category['category_id'] == $data['categoryId']) { 
            echo "<h2>$category[name]</h2>";
        }}   
        ?>
    <div class="blog-container">
        <?php if ($data['blog']) { ?>
            <?php foreach ($data['blog'] as $blog) { ?>
                <a href="blog?id=<?= $blog['blog_id'] ?>">
                    <div class="single-blog">
                        <img src="<?= ROOT ?>/assets/images/<?= $blog['image'] ?>" alt="">
                        <h6><?= $blog['heading'] ?></h6>
                    </div>
                </a>
            <?php }
        } else { ?>
            <h2>No Blog Found</h2>
        <?php } ?>
    </div>
</section>
<?php require '../app/views/footer.view.php' ?>