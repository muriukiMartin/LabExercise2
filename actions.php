<?php
include_once 'connect.php';
include_once 'userfunctions.php';

if(!isset($_SESSION)){
    session_start();
}

$link = new Connector();
$pdo = $link->connect();

if(isset($_POST["register"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $city = $_POST["city"];
    $photo = $_FILES["photo"];
    $password = password_hash($_POST["pass"], PASSWORD_DEFAULT);

    $user = new User();
    $user->setName($name);
    $user->setEmail($email);
    $user->setUserPass($password);
    $user->setCity($city);
    $user->setPhoto($photo);
    
    $con = $user->register($pdo);
    echo $con;
    header("Location: login.php");
}

if(isset($_POST['login'])){
    $email = $_POST["email"];
    $password = $_POST["pass"];

    $user = new User();
    $user->setEmail($email);
    $user->setInputPass($password);
    $details = $user->login($pdo);

    $_SESSION['id'] = $details['id'];
    $_SESSION['name'] = $details['username'];
    $_SESSION['email'] = $details['email'];
    $_SESSION['city'] = $details['city'];
    $_SESSION['photo'] = $details['profile_photo'];

    header("Location: index.php");
}
else{
    header("Location: login.php");
}

if(isset($_POST['change'])){
    $inputPass = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $newPass = password_hash($_POST["newpass"], PASSWORD_DEFAULT);
    

    if(password_verify($inputPass,$newPass)){
        $user = new User();
        $user->setInputPass($inputPass);
        $user->setNewPass($newPass);
        $con = $user->changePassword($pdo);
        echo $con;
        header("Location: login.php");
    }else{
        echo "No match";
    }

   
}

?>