<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if(isset($_POST["submit"]))
{
    //Taking data
    $name = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["password"];

    //SignupContr
    include "../classes/login.classes.php";

    $login = new Login($name,$email,$pwd);
    $login->setData($name,$email,$pwd);

}


?>