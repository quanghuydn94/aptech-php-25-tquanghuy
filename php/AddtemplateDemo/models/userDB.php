<?php 
    include 'connectUserDB.php';
    // login user
    function loginUser($username,$password) {
        global $UserDB;
        $login_User = $UserDB->query("SELECT * FROM usermember WHERE username = '$username' AND `password` = '$password'  LIMIT 1");
        return $login_User;
    }
   // insert user
    function insertUser($username,$password,$email,$vkey) {
        global $DB;
        $insert = $DB->query("INSERT INTO `usermember`(`username`,`password`,`email`,`vkey`)
        VALUES('$username','$password','$email','$vkey')");
        return $insert;
    }
?>