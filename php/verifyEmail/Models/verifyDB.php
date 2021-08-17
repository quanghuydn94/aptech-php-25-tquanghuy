<?php 
include 'connectDB.php';
function checkAccount($vkey) {
    global $DB;
    $resultSet = $DB->query("SELECT `vkey` FROM `usermember` WHERE `vkey`='$vkey' LIMIT 1"); 
    return $resultSet;
      
}
function update ($vkey) {
        global $DB;
        $update = $DB->query("UPDATE `usermember` SET `verified` = 1 WHERE `vkey` = '$vkey' LIMIT 1");
        return $update;
 
}
?>