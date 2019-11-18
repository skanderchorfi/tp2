<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></head>
<body>
<h1> Liste des étudiants </h1>
<a href="create.php"> nouvel étudiant </a>
  
<table border="1">
        <tr>
            <th>id</th>
            <th>firstname</th>
            <th>lastname</th>
            <th>email</th>
            <th>phone</th>
          
        </tr>
        <?php
    include 'classe/etudiant.class.php';
    $student =new student ;
    $liststudents = $student ->readallstudents () ;

while ($data = $liststudent->fetch()) 
{ ?> 
   
   <tr>
         <td> <?=  $data['id']?></td>;
          <td><?=$data['firstname']?></td> ;
           <td><?=$data['lastname']?></td> ;
            <td><?=$data['email']?></td> ;
          <td><?=$data['phone']?></td> ;   
         
         </tr>  
         
<?php } ?>
 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>