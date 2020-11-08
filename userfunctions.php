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
    private $userPass;
    private $inputPass;
    private $newPass;

    public function _construct(){
        $this->username = "";
        $this->email = "";
        $this->city = "";
        $this->userPass = "";
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
        return $this->userPass;
    }
    public function setUserPass($userPass){
        return $this->userPass = $userPass;
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
        return $this->inputPass;
    }
    public function setInputPass($inputPass){
        return $this->inputPass = $inputPass;
    }

    public function getNewPass(){
        return $this->newPass;
    }
    public function setNewPass($newPass){
        return $this->newPass = $newPass;
    }


    public function register($pdo){
        $file_name = $this->photo['name'];
        $file_tmp_location = $this->photo['tmp_name'];
        $file_path = "images/";
        move_uploaded_file($file_tmp_location, $file_path.$file_name);

        try{
            $stmt = $pdo->prepare("INSERT INTO users (username,email,city,profile_photo,user_password) VALUES (?,?,?,?,?)");
            $stmt->execute([$this->username,$this->email,$this->city,$file_name,$this->userPass]);
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
            $this->userPass = $result['user_password'];
            if(password_verify($this->inputPass, $this->userPass)){
                $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ? AND user_password = ?");
                $stmt->execute([$this->email,$this->userPass]);
                $result = $stmt->fetch();
                //$stmt = null;
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
            $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->execute([$this->email]);
            $result = $stmt->fetch();
            $this->userPass = $result['user_password'];
            return $this->userPass;
            return $this->inputPass;
            return $this->newPass;
        
            if(password_verify($this->inputPass, $this->userPass)){
                $stmt = $pdo->prepare("UPDATE users SET user_password = ? WHERE id = ? AND email= ?");
                $stmt->execute([$this->newPass, $_SESSION['id'], $this->userPass]);
                $result = $stmt->fetch();
                $stmt = null;
                return "Password changed";
            }else{
                return "Password not changed";
            }
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