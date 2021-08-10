<?php
require('connectDb.php');
function getAllClass(){
    global $db;
    $classes = $db->query('select * from Classes');
    return $classes;
}
function getClassById($id){
    global $db;
    $class = $db->query("select * from Classes where ClassId=$id")->fetch();
    return $class;
}
function insertClass($className){
    global $db;
    $insert_Count = $db->exec("INSERT INTO `classes`(`ClassName`) VALUES ('$className')");
    return $insert_Count;
}
function updateClass($id, $className){
    global $db;
    $update_Count = $db->exec("UPDATE `classes` SET `ClassName`='$className' WHERE ClassId=$id");
    return $update_Count;
}
function deleteClass($id){
    global $db;
    $delete_Count = $db->exec("DELETE FROM `classes` WHERE ClassId=$id");
    return $delete_Count;
}
?>