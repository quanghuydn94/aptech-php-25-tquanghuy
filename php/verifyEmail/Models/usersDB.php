<?php
include 'connectDB.php';
function getUser($user,$pword) {
    global $DB;
    $getUser = $DB->query("SELECT * FROM `usermember` WHERE `username` = '$user' AND `password` = '$pword' AND `verified`=1");
    return $getUser;
}

function insertUser($username,$password,$email,$vkey) {
    global $DB;
    $insert = $DB->query("INSERT INTO `usermember`(`username`,`password`,`email`,`vkey`)
    VALUES('$username','$password','$email','$vkey')");
    return $insert;
}
 
?>