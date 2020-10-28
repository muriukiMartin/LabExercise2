<?php
include_once('interface.php');
if(!isset($_SESSION)){
    session_start();
}
class User implements Account{
    private $username;
    private $email;
    private $city;
    private $photo;
    private $userpass;
    private $inputpass;
    private $newpass;

    public function _construct(){
        $this->username = "";
        $this->email = "";
        $this->city = "";
        $this->userpass = "";
        $this->photo = "";
    }
    
    public function getName(){
        return $this->username;
    }
    public function setName($username){
        return $this->username = $username;
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        return $this->email = $email;
    }

    public function getUserPass(){
        return $this->userpass;
    }
    public function setUserPass($userpass){
        return $this->userpass = $userpass;
    }

    public function getCity(){
        return $this->city;
    }
    public function setCity($city){
        return $this->city = $city;
    }

    public function getPhoto(){
        return $this->photo;
    }
    public function setPhoto($photo){
        return $this->photo = $photo;
    }
    
    public function getInputPass(){
        return $this->inputpass;
    }
    public function setInputPass($inputpass){
        return $this->inputpass = $inputpass;
    }

    public function getNewPass(){
        return $this->newpass;
    }
    public function setNewPass($newpass){
        return $this->newpass = $newpass;
    }


    public function register($pdo){
        $file_name = $this->photo['name'];
        $file_tmp_location = $this->photo['tmp_name'];
        $file_path = "images/";
        move_uploaded_file($file_tmp_location, $file_path.$file_name);

        try{
            $stmt = $pdo->prepare("INSERT INTO users (username,email,city,profile_photo,user_password) VALUES (?,?,?,?,?)");
            $stmt->execute([$this->username,$this->email,$this->city,$file_name,$this->userpass]);
            $stmt = null;
            return "User saved";
        }catch (PDOException $e){
            return $e->getMessage();
        }
    }

    public function login($pdo){
        try{
            $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->execute([$this->email]);
            $result = $stmt->fetch();
            $this->userpass = $result['user_password'];
            if(password_verify($this->inputpass, $this->userpass)){
                $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ? AND user_password = ?");
                $stmt->execute([$this->email,$this->userpass]);
                $result = $stmt->fetch();
                $stmt = null;
                return $result;
            }else {
                echo "Wrong password. Please try again";
            }
        }catch (PDOException $e){
            return $e->getMessage();
        }
    }

    public function changePassword($pdo){
        try{
            $stmt = $pdo->prepare("UPDATE users SET password = ? WHERE id = ? AND user_password = ?");
            $stmt->execute([$this->newpass, $_SESSION['id'], $this->userpass]);
            $result = $stmt->fetch();
            $stmt = null;
            return "Password changed";
        }catch (PDOException $e){
            return $e->getMessage();
        }
    }

    public function logout($pdo){
         session_destroy();
    }

    public function _destruct(){

    }
}







?>