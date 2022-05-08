<?php

include "../classes/dbh.classes.php";


class Signup extends Dbh{
    
    private $username;
    private $email;
    private $re_email;
    private $pwd;
    private $re_pwd;

    public function __construct($username,$email,$re_email,$pwd,$re_pwd){
        $this->username = $username;
        $this->email = $email;
        $this->re_email = $email;
        $this->pwd = $email;
        $this->re_pwd = $re_pwd;
    }

    public function setData($username,$email,$pwd){
        $stmt = $this->connect()->prepare('INSERT INTO User(`Username`, `Email`, `Password`) VALUES (:username,:email,:password)');
        
        $execute = $stmt->execute(array(":username"=>$username,":email"=>$email,"password"=>$pwd));
        
        if($execute){
            header("Location: ../index.php?error=pass");
            exit();
        }

        else{
            $stmt = null;
            header("Location: signup.inc.php?error=fail");
            exit();
        }
    }
    



}
