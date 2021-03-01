<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                background-color: pink;
            }
            .Form2{
                height: 200px;
                width: 400px;
                margin: 10% auto;
                background-color: white;
                padding: 20px;
            }
        </style>
    </head>
    <body>
        <div class="Form2">
<?php
var_dump($_POST);
echo $_POST['pword'];
// $pattern = "/@/i";
// if(preg_match($pattern, $_POST['pword'])){
//     echo "hop le";
// }
$pattern = "/u/i";
echo "<br>". preg_match($pattern, $_POST['pword'])  ;
if (preg_match($pattern, $_POST['pword'])) {
    echo "<br>Xin chao Admin";
}else{
    echo "<br> dang ky khong thanh cong";
}
?>
<br>
<a href="form.php">Return</a>
</div>
</body>
</html>