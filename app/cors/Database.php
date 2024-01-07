<?php

trait Database
{
    private $PDO;
    public function __construct()
    {
        try {
            $this->PDO = new PDO("mysql:host=" . HOST . ";dbname=" . DBNAME, USERNAME, PASS);
            $this->PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage(), "<br>";
            exit;
        }
    }
    public function DBconnect()
    {
        return $this->PDO;
    }
}
