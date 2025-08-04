<?php
namespace Claro\StudentManagement\Core;
use  mysqli;


 class Database 
 {

    protected $conn;

    public function __construct()
    {
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $db = 'oop2_db';

       $this->conn = new \mysqli("localhost", "root", "", "oop2_db");
        if ($this->conn->connect_error)
        {
            die ('Connection to databse failed! : '. $this->conn->connect_error);
        }


    }
 }
?>