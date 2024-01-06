<?php
class App
{   
    private $controller = 'home';
    private $method = 'index'; 
    private function fileSplit()
    {
        $URL = $_GET['url'] ?? 'home';
        $URL = explode('/', $URL);
        return $URL;
    }

    public function loadController()
    {
        $URL = $this->fileSplit();
        $fileName = "../app/controllers/" . ucfirst($URL[0]) . ".php";
        if (file_exists($fileName)) {
            require $fileName;
            $this->controller = ucfirst($URL[0]);
        } else {
            require "../app/controllers/_404.php";
            $this->controller = '_404';
        }
        $controller = new $this->controller;
        call_user_func_array([$controller, $this->method], []);
    }
}
