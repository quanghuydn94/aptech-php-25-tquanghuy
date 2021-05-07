<?php 
function checkUser($em) {
    require_once ('connData.php');


    $query="SELECT * FROM userprivate
        WHERE email='$em'";

    $result=$connect->query($query);

    $kp = false;

    if ( mysqli_num_rows($result) >0){
        $kp = true;
    }
    else {
        require_once ("insertData.php");
        insertData();
    }
    return json_encode($kp);
}

?>