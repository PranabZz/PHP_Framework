<?php

include "../classes/dbh.classes.php";


class Login extends Dbh{
    
    private $username;
    private $email; 
    private $pwd;
  

    public function __construct($username,$email,$pwd){
        $this->username = $username;
        $this->email = $email;
        $this->pwd = $email;
    }

    public function setData($username,$email,$pwd){
        $stmt = $this->connect()->prepare('SELECT `Id`, `Username`, `Email`, `Password` FROM `User` WHERE Id = ? AND Username = ? AND Password = ?');
        
        $stmt->execute(array($username,$email,$pwd));

        if($stmt->rowCount()){
            $stmt = null;
            header("location:../home.php?error=pass");
            exit();
        }

        else{
            $stmt = null;
            header("location:../home.php?error=fail");
            exit();
        }
    }
    



}
