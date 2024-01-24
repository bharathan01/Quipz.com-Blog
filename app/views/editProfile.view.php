<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/editProfile.css">
</head>
<body>
    <section class="profile">
        <div class="profile_container">
            <form method="POST" enctype="multipart/form-data">
                <div class="profile_img">
                    <div class="profile_img_input" id="profile_img_input">
                        <img src="<?= ROOT ?>/assets/images/<?= $data['profileimage'] ?>" accept="image/*" alt="" id="profile_image_update">
                    </div>
                    <p id="error" style="color: red;"></p>
                </div>
                <div class="profile_details">
                   <input type="file" hidden id="profile_input" name="profileImage">
                    <label for="name">Name</label>
                    <input type="text" value="<?=$data['name'] ?>" name="name" id="name">
                    <label for="username">User Name</label>
                    <input type="text" value="<?=$data['username'] ?>" name="username" id="username">
                    <label for="email" >Email</label>
                    <input type="email" value="<?=$data['email'] ?>" name="email" id="email">
                    <label for="bio" >Bio</label>
                    <textarea name="bio" id="bio" cols="30" rows="10"><?=$data['bio'] ?></textarea><br>
                    <button class="update_btn" type="submit" name="update">Update</button>
                </div>
            </form>
        </div>
    </section>
    <script src="<?= ROOT ?>/assets/js/editProfile.js"></script>
</body>
</html>