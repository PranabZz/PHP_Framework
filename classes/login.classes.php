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
        
        if($stmt->execute(array($username,$email,$pwd))){
            $stmt = null;
            header("Location: login.inc.php?error=pass");
            exit();
        }

        else{
            $stmt = null;
            header("Location: login.inc.php?error=fail");
            exit();
        }
    }
    



}
