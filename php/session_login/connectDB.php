<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "huytran";
 
 //create connection
 $connect = new mysqli($servername, $username, $password, $database);
 
 $connect->set_charset("utf8");
 
 //check connection
 if($connect->connect_error) {
     die("Connection failed:". $connect->connect_error);
 }

  
?>