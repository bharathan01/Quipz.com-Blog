<?php
trait SigninModel{
    use Model;
    public function dataIntoDB($userData){
       $Query = "SELECT * FROM users WHERE username = :username AND password = :password;";
       $result = $this->getdataFromDb($Query,$userData);
       return $result;
    }
}
