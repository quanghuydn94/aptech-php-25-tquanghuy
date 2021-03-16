<?php

$info = file_get_contents("info.json");


$as = json_decode($info,true);
$output = false;
foreach($as['user'] as  $user ){
    
    if($_POST['email'] === $user['email'] &&
    $_POST['pword'] === $user['password']){
         echo "Sign in successfully!";
         break;
    } 
        
}
if(check == false){
    echo "Email or Password does not match!";
    
}  


// cach 2:

// $file = fopen('data.json', 'r');
// $dataRaw = fread($file, filesize('data.json'));
// $data = json_decode($dataRaw);

// $check = false;
// foreach ($data->accounts as $key => $account) {
//     $email = $account->email;
//     $password = $account->password;
//     if (
//         $_GET['email'] === $email
//         &&
//         (int)$_GET['password'] === $password
//     ) {
//         $check = true;
//         echo "dang nhap thanh cong";
//         break;
//     }
// }
// if ($check === false) {
//     echo "dang nhap that bai";
// } 