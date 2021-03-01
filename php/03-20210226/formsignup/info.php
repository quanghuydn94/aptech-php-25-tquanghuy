<?php
var_dump($_POST);
echo "<br>";
echo "Name:".$_POST['name']."<br>";
echo "Email:".$_POST['email']."<br>";
echo "Password:".$_POST['pword']."<br>";
echo "Confirm Password:".$_POST['cpword']."<br>";
echo "Date:".$_POST['dateOfBirth']."<br>";

//  Name Check
$patternName = '/^[a-zA-Z ]{1}/i';
if (preg_match($patternName, $_POST['name'])) {
    echo "<br>Sign up successed ";
}else{
    echo "<br>name do not match";
}
//  Email check
$patternEmail = '/^\S*[a-zA-Z0-9-_]+@[a-z]{5}\.[a-z]{2}\S*$/i';
if (preg_match($patternEmail, $_POST['email'])) {
    echo "<br>Sign up successed ";
}else{
    echo "<br>email do not match";
}
// Password Check
$patternPword = '/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/';
if (preg_match($patternPword, $_POST['pword']) &&
    $_POST['pword'] === $_POST['cpword']) {
    echo "<br>Sign up successed ";
}else{
    echo "<br>pword do not match";
}

//  Date of Birth
$date = date(DATE_ATOM,mktime(0,0,0,28,02,2003)); 
if ($_POST['dateOfBirth']>$date && empty($_POST['dateOfBirth'])){
    echo "<br>Do not enough age";
}else{  
    echo "<br> Sign up Successed";
}
?>
<br><a href='indexSN.php'>Go back</a>