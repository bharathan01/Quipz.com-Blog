<?php

class Signup extends Controller{
    public function index(){
        $this->view('signup');
    }
    public function formData(){
        if(isset($_POST['signup'])){
        }
       
    }
}

$form = new Signup();
$form->formData();