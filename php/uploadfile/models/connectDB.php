<?php 
 try {
    $DB = new PDO('mysql:host=localhost;dbname=file_db', 'root','');
    // echo 'connect';
} catch(PDOException $ex) {
    echo $ex->getMessage();
}
?>