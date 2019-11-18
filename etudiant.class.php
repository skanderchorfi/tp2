<?php
require 'dbconnect.class.php';
class student {
private $cnx ;
public function __construct (){
    $db = new basededonnees ;
    $this->cnx = $db->connectdb() ;
}
public function readallstudents (){

    try {
        $req = 'SELECT * FROM students';
        $result = $this->cnx->prepare($req);
        $result->execute();
        return $result ;
    }
    catch (PDOException $e ){
        echo $e->getmessage ();
    }
}
public function addnewStudent ($firstname,$lastname,$email,$phone){
    try {
        $sql = "INSERT INTO student (frstname,lastname,email,phone) VALUES (:clt_firstname,:clt_lastname,:clt_email,:clt_phone)";
        $result =$this ->cnx->prepare($sql);
        $result->binparam(":clt_firstname",$firstname);
        $result->binparam(":clt_lastname",$lastname);
        $result->binparam(":clt_email",$email);
        $result->binparam(":clt_phone",$phone);
        $result ->execute () ;
         return $result ; 
    }
    catch (PDOException $ex) {
        echo $ex->getMessage ();
    }
}
public function deleteStudent ($id) {
try {
    $sql = 'DELETE FROM student WHERE id = :clt_id';
    $result = $thiss ->execReq ($sql) ;
}

}