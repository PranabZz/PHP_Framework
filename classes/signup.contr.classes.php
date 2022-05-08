<?php

class SignupContr{

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

   


}