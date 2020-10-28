<?php
include_once 'connect.php';
include_once 'userfunctions.php';

if(!isset($_SESSION)){
    session_start();
}

$link = new Connector();
$pdo = $link->connect();
$user = new User();
$user->logout($pdo);
header("Location: login.php");
?>