<?php
    try {
        $username = 'root';
        $password = '';
        $DB = new PDO('mysql:host=localhost;dbname=studentmanagement', $username, $password);   
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
?>