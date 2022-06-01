<?php //PDO


class DB
{

    static public function connect(){
        $db = new PDO("mysql:host = localhost;dbname=hospital","root","");
        $db->exec("set names utf8 "); //pour exucute  
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
        return $db;
    }
}




?>