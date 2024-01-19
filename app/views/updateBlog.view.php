<?php include '../app/views/header.view.php' ?>

<link rel="stylesheet" href="<?= ROOT ?>/assets/css/createblog.css">
<section class="main_page">
    <div class="upload_file">
        <form method="POST" enctype="multipart/form-data">
            <div class="drag_area" id="drag_area">
                <?php if ($data['blogImage']) { ?>
                    <img src="<?= ROOT ?>/assets/images/<?= $data['blogImage'] ?>" alt="">
                <?php } ?>
                <p class="drop">Drag & Drop Image</p>
                <p class="open_file">Browse image</p>
                <span class="support">Supports PNG, JPG, JPEG</span>
                <span class="invaild_img">File Not supported..!</span>
            </div>
    </div>
    <div class="blog_content">
        <input type="file" name="blog_image" id="blog_image" hidden accept="image/png, image/gif, image/jpeg">
        <label for="category">category</label>
        <select name="selectCatagory" id="selectCatagory" class="selectCatagory">
            <option value="">Catagory</option>
            <?php foreach ($data['category'] as $catagory) { ?>
                <?php
                $isSelected = ($catagory['category_id'] == $data['blogcategory']) ? 'selected' : '';
                ?>
                <option value="<?php echo $catagory['category_id']; ?>"<?php echo $isSelected; ?>><?php echo $catagory['name'] ?></option>
            <?php } ?>
        </select>
        <label for="heading">Heading</label>
        <input type="text" id="heading" name="heading" value="<?= $data['heading'] ?>">
        <label for="content">Content</label>
        <textarea name="blog_content" id="blog_content" cols="30" rows="10"><?= $data['content'] ?></textarea>
        <div class="post_btn">
            <button type="submit" id="uploadBlog" name="uploadBlog">Update</button>
        </div>
        </form>
    </div>
</section>
<script src="<?= ROOT ?>/assets/js/createblog.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<?php require '../app/views/footer.view.php' ?>