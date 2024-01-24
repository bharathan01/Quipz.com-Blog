<?php 
trait UpadateProfile{
    use Model;
    public function updateProfile($upadatedData){
        $name = $upadatedData['name'];
        $username = $upadatedData['username'];
        $email = $upadatedData['email'];
        $bio = $upadatedData['bio'];
        $profileImg = $upadatedData['profileImage'];
        $userId = $_SESSION['user_id'];
        if(is_array($profileImg)){
            $profileImgTemp = $profileImg['tmp_name'];
            $profileImgName = $profileImg['name'];
            $uploadImage = "../public/assets/images/".$profileImgName;
            move_uploaded_file($profileImgTemp, $uploadImage);
        }
        else{
            $profileImgName = $profileImg;
        }
        $Query = "UPDATE users SET 
        name='$name',username='$username',email='$email',bio='$bio',profileimage='$profileImgName' WHERE user_id = $userId";
        return $this->insertIntoDb($Query);
    }
}
