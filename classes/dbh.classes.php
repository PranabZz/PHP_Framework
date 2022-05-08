<?php 

class Dbh{
    protected function connect(){
        try{
            $username = "root";
            $password = "";
            $dbh = new PDO('mysql:host=localhost;dbname=MCV',$username,$password);
            $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
            return $dbh;
        }
        catch(PDOException $e){
            print "Error " . $e->getMessage();
            die();
        }
    }
}