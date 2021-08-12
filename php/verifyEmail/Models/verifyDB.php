<?php 
include 'connectDB.php';
function verifiedAccount($vkey) {
    global $DB;
    $resultSet = $DB->query("SELECT `vkey` FROM `usermember` 
    WHERE `vkey`='$vkey' LIMIT 1"); 
      
}
function update ($vkey) {
     
        $update = $DB->query("UPDATE `usermember` SET `verified` = 1 WHERE `vkey` = '$vkey' LIMIT 1");
        return $update;
 
}
?>