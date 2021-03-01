<?php
var_dump($_POST);
$email = "quanghuy@gmail.com";
$passWord = "Tranquanghuy1";
$patternEmail = '/^\S*[a-zA-Z0-9-_]+@[a-z]{5}\.[a-z]{2}\S*$/i';
$patternPassWord = '/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/';
if(preg_match($patternEmail, $_POST['eMail']) && preg_match($patternPassWord, $_POST['password'])){
    if ($_POST['eMail'] === $email && $_POST['password'] === $passWord){
        echo "<br> Sign in successed <br>";
    }else{
        echo "<br> Sign in failed <br>";
    }
}else{
    echo "<br> Email do not match <br>";
}

// if(  preg_match($patternEmail, $_POST['eMail']) ){
//     echo "true";
// }else{
//     echo "false";
// }
?>
<a href='indexSI.php'>Go back</a>