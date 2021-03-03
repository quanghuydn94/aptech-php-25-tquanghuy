<?php
// var_dump($_POST);
// $infoFile = fopen("info.json", "r");
 
// fread($infoFile, filesize("info.json"));
// $info = json_encode($infoFile);
$info = file_get_contents("info.json");

// $info = '{"Peter":23,"Huy":"quanghuy","Hung":"hung33"}';
$as = json_decode($info,true);
$output = "";
foreach($as['user'] as  $user ){
    // $output .="Email: ".$user['email']."<br>";
    // $output .="Password: ".$user['password']."<br>";
    // $output .="Date: ".$user['date']."<br>";
    if($_POST['email'] === $user['email'] &&
    $_POST['pword'] === $user['password']){
         echo "Sign in successfully!";
         break;
    }else{
        echo "Email or Password does not match!";
        break;
    }
        
}
  
//  echo "<br>".$output ;
// fclose($infoFile);