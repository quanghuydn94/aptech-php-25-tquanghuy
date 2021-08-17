<?php
try {
    $UserDB = new PDO('mysql:host=localhost;dbname=users','root','');
   
} catch(PDOException $ex) {
    echo $ex->getMessage();
}

?>