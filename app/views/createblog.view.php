

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/createblog.css">
</head>
<body>
    <section class="main_page">
        <div class="upload_file">
            <div class="drag_area" id="drag_area">
                <ion-icon class="icon" name="cloud-upload-outline"></ion-icon>
                <p class="drop">Drag & Drop Image</p>
                <p class="open_file">Browse image</p>
                <input type="file" name="blog_image" id="blog_image" hidden accept="image/png, image/gif, image/jpeg">
                <span class="support">Supports PNG, JPG, JPEG</span>
                <span class="invaild_img">File Not supported..!</span>
            </div>
        </div>
        <div class="blog_content">
            <form action="">
                <label for="category">category</label>
                <select>
                    <option value="">Catagory</option>
                    <?php foreach($data as $catagory){?>
                    <option value="<?php echo $category['category_id']; ?>"><?php echo $catagory['name']?></option>
                 <?php } ?>
                </select>
                <label for="heading">Heading</label>
                <input type="text" id="heading" name="heading">
                <label for="content">Content</label>
                <textarea name="blog_content" id="blog_content" cols="30" rows="10"></textarea>
                <div class="post_btn">
                    <button>POST</button>
                </div>
                
            </form>
        </div>
    </section>
    <script
    type="module"
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
  ></script>
  <script
    nomodule
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
  ></script>
  <script src="<?= ROOT ?>/assets/js/createblog.js"></script>
</body>
</html>