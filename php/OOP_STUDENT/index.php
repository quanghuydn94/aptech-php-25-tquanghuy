<?php
    session_start();
    if(!isset($_GET['page'])) {
        header("Location:views/add.php");
    }
    
     
?>