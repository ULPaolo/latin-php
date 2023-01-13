<?php
 
 $mysql = new mysqli(
         "us-cdbr-east-06.cleardb.net", 
         "be33d85610f0dc",
         "f58cf0e4",
         "heroku_6b84ded6bcd9aa9"
         );
 
 if ($mysql->connect_error){
     die("Failed". $mysql->connect_error);
 }else{
     echo "Exito";
 }
 ?>
