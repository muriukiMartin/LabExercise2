<?php

include_once("util.php");

class Connector{
    protected $pdo;
    function __construct(){
        $dsn = "mysql:host=".Util::$server.";dbname=".Util::$db_name."";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];
        try{
            $this->pdo = new PDO($dsn, Util::$db_username, Util::$db_password, $options);
        }catch (PDOException $e){
            echo $e->getMessage();
        }
    }

    public function connect(){
        return $this->pdo;
    }

    public function close(){
        return $this->pdo = null;
    }
}




?>