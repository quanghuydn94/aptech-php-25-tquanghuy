<?php

if (!isset($_GET['page'])) {
    header("Location:views/home.php"); 
}  else {
    if ($_GET['page'] == 'login') {
        header("Location:views/login.php");
        // Login account
        if (isset($_POST['user']) && isset($_POST['pass'])) {
            include 'modes/usersDB.php';
            getUser($user,$pword);
            if (($_POST['user'] === $user) && ($_POST['pass'] === $pword)) {
                echo "login success";
            } else {
                echo "your username or password not correct";
            }
        }
    } else {
        header("Location:views/register.php");
    }
}

//active account
if(isset($_GET['action']) == 'active') {
     
    if(isset($_POST['check'])){
        include 'Models/verifyDB.php';
        $vkey = $_POST['key'];
        echo $vkey;
        $resultCheck = checkAccount($vkey);
        $result = $resultCheck->rowCount();
        if($result >0) {
            
            $update = update($vkey);
            if($update) {
                echo "your account was activated";
            } else {
                echo 'your account activated or invalid';
            }
        }
    }
}
if (isset($_POST['u'])) {
    include 'Models/usersDB.php';
    $vkey = md5(time().$_POST['u']);
    $insert = insertUser($_POST['u'],$_POST['p'],$_POST['e'],$vkey);

    if($insert) {
        $to = $_POST['e'];
        $subject = "Email Verification";
        $message = "<a href='http://localhost/aptech-php-25-tqhuy/php/verifyEmail/Views/verify.php?vkey=$vkey'> Active Account </a>
        your key: $vkey";  
        $headers = "From: quanghuytrandn568@gmail.com";
        mail($to,$subject,$message,$headers); 
        header("Location:views/reply.php"); 
    }
} 
//CHECK account
if(isset($_GET['action']) == 'vkey') {
    include 'Models/verifyDB.php';
    $key = $_POST['key'];
    $getKey = verifiedAccount($key);
    if($getKey >0) {
        $active = update($get_user);
        if($active){
            header("Location:views/reply.php");
        } else {
            echo 'cannot do it';
        }
    }
     
}
 

 

 


     

 

?>