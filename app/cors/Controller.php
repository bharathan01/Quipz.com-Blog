<?php

class Controller{
    public function view($name, $data){
        $fileName = "../app/views/". $name .".view.php";
       if(file_exists($fileName)){
          require $fileName;
       }
       else{
        require "../app/views/".$name.".view.php";
       }
    }
}