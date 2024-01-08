<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/editProfile.css">
    <script src="<?= ROOT ?>/assets/js/editProfile.js"></script>
</head>
<body>
    <section class="profile">
        <div class="profile_container">
            <form action="">
                <div class="profile_img">
                    <div class="profile_img_input" id="profile_img_input">
                        <img src="../images/img-3.jpg" accept="image/*" alt="" id="profile_image_update">
                        <input type="file" hidden id="profile_input">
                    </div>
                </div>
                <div class="profile_details">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                    <label for="username">User Name</label>
                    <input type="text" name="username" id="username">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                    <label for="bio">Bio</label>
                    <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br>
                    <button class="update_btn" type="submit">Update</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>