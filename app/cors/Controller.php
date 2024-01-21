<?php

class Controller
{
    public function view($name, $data)
    {
        $fileName = "../app/views/" . $name . ".view.php";
        if (file_exists($fileName)) {
            if ($name === 'profile' || $name === 'editProfile' || $name === 'updateBlog') {
                if ($_SESSION['user_id']) {
                    require $fileName;
                } else {
                    header("location:signin");
                }
            } else {

                require $fileName;
            }
        } else {
            require "../app/views/" . $name . ".view.php";
        }
    }
}
