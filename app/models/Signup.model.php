<?php
trait SignupModel{
    use Model;
    public function dataIntoDB($userData){
       $name = $userData['name'];
       $username = $userData['username'];
       $email = $userData['email'];
       $password = $userData['password'];
       $Query = "INSERT INTO users(name, username, email,password) VALUES 
       ('$name','$username','$email','$password')";
       $success = $this->insertIntoDb($Query);
       return $success;
    }
}
