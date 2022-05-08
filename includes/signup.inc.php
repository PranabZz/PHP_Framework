<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if(isset($_POST["submit"]))
{
    //Taking data
    $name = $_POST["username"];
    $email = $_POST["email"];
    $re_email = $_POST["reemail"];
    $pwd = $_POST["password"];
    $re_pwd = $_POST["repassword"];

    //SignupContr
    include "../classes/signup.classes.php";
    include "../classes/signup.contr.classes.php";

    $signup = new Signup($name,$email,$re_email,$pwd,$re_pwd);
    $signup->setData($name,$email,$pwd);


}


?>