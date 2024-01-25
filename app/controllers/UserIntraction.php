<?php 
class UserIntraction extends Controller{
    public function index(){
        echo $_POST['user_id'];
        $this->view('UserIntraction',"");
    }
}