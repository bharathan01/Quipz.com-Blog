<?php 
trait UpadateProfile{
    public function updateProfile($upadatedData){
        $name = $upadatedData['name'];
        $username = $upadatedData['username'];
        $email = $upadatedData['email'];
        $bio = $upadatedData['bio'];
        $profileImg = $upadatedData['profileImage'];
        $profileImgTemp = $profileImg['tmp_name'];
        $profileImgName = $profileImg['name'];
        $userId = $_SESSION['user_id'];
        $uploadImage = "C:/xampp/htdocs/MVC-frameWork/public/assets/images/".$profileImgName;
        move_uploaded_file($profileImgTemp, $uploadImage);
        $Query = "UPDATE users SET 
        name=$name,username='[value-3]',`email`='[value-4]',`bio`='[value-5]',`role`='[value-6]',`profileimage`='[value-8]' WHERE 1";
    }
}