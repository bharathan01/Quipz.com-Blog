<?php 
class Home extends Controller{

    public function index(){
        $this->view('home','');
    }
} 
$home = new Home();
if(isset($_POST['logout'])){
    header("location:signin");
}