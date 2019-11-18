
<?php
require 'etudiant.class.php';
$student =new student ; 
     $firstname = $_POST['firstname'] ; 
     $lastname = $_POST['lastname'] ; 
     $email = $_POST['email'] ; 
     $phone = $_POST['phone'] ;
   $ajouteretudiant = $student -> addnewStudent ($firstname,$lastname,$email,$phone) ;