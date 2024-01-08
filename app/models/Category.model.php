<?php 
trait Category {
 use Model;
 public function dataFromDB(){
    //    $username = $userData['username'];
    //    $password = $userData['password'];
       $Query = "SELECT * FROM categories;";
       $result = $this->getCategoryFromDb($Query);
       return $result;
    }
}