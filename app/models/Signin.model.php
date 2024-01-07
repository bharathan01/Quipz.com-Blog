<?php
trait SigninModel{
    use Model;
    public function dataIntoDB($userData){
    //    $username = $userData['username'];
    //    $password = $userData['password'];
       $Query = "SELECT * FROM users WHERE username = :username AND password = :password;";
       $result = $this->getdataFromDb($Query,$userData);
       return $result;
    }
}
