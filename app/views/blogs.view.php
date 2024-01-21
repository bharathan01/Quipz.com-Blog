<?php include '../app/views/header.view.php' ?>
<link rel="stylesheet" href="<?= ROOT ?>/assets/css/blogs.css">
<section>
        <div class="blog-container">
        <?php if($data){ ?>    
        <?php foreach($data as $blog) {?>
           <a href="blog?id=<?=$blog['blog_id']?>">
            <div class="single-blog"> 
               <img src="<?= ROOT ?>/assets/images/<?= $blog['image'] ?>"  alt="">
               <h6><?=$blog['heading']?></h6>
            </div>
           </a>
        <?php }}else{?>
            <h2>No Blog Found</h2>
        <?php }?>       
        </div>
</section>
<?php require '../app/views/footer.view.php' ?>