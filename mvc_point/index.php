<?php
    if (!isset($_GET['page'])) {
        header('Location:views/default.php');
    }  else {
        if($_GET['page'] == 'student') {
            header('Location: views/studentmanagement.php');
        }
         
    }
    
    if(isset($_GET['function'])){
        if($_GET['function'] == 'insertstudent') {
            include 'Models/studentDB.php';
            $insert_Count = insertStudent($_POST['studentname'],$_POST['address'],$_POST['phone'],
            $_POST['mathpoint'],$_POST['literarypoint'],$_POST['phone']);
            if($insert_Count > 0){
                header('Location: views/studentmanagement.php');
            }
        }    
         else if($_GET['function'] == 'updateStudent'){
            include 'Models/studentDB.php';
            $update_count = updateStudent($_GET['id'],$_POST['studentname'],$_POST['address'],
            $_POST['phone'],$_POST['mathpoint'],$_POST['literarypoint']);
            if($update_count > 0){
                header('Location: views/studentmanagement.php');
            }
    
        } else if($_GET['function'] == 'deleteStudent'){
            include 'Models/studentDB.php';
            $delete_count = deleteStudent($_GET['id']);
            if($delete_count > 0){
                header('Location: views/studentmanagement.php');
            }
        }

    }
     
?>