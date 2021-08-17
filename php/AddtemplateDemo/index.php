<?php session_start();

if ( !isset($_GET['page'])) {
    header("Location:views/login.php");
}
// login account
if(isset($_GET['action'])=='login') {
    if(isset($_POST['login'])) {
        if($_POST['username']==''|| $_POST['password']=='') {
            echo ' nhap thong tin';
            header("location:views/login.php");

        }

        else {
            $userName=$_POST['username'];
            $password=$_POST['password'];
            include 'models/userDB.php';
            $userLogin=loginUser($userName, $password);
            $resultUser=$userLogin->fetchAll(PDO::FETCH_ASSOC);

            if($resultUser > null) {
                $verified=$resultUser[0]['verified'];
                $_SESSION['login']=$resultUser;

                if($verified==1) {
                    header("Location:views/home.php");
                }
            }
            else {
                 
                header("Location:views/replyLogin.php");
            }
        }
    }
}


//register account and send mail check
if (isset($_POST['u'])) {
    include 'Models/userDB.php';
    $vkey=md5(time().$_POST['u']);
    $insert=insertUser($_POST['u'], $_POST['p'], $_POST['e'], $vkey);

    if($insert) {
        $to=$_POST['e'];
        $subject="Email Verification";
        $message="<a href='http://localhost/aptech-php-25-tqhuy/php/verifyEmail/Views/verify.php?vkey=$vkey'> Active Account </a>
your key: $vkey";  
        $headers="From: quanghuytrandn568@gmail.com";
        mail($to, $subject, $message, $headers);
        header("Location:views/reply.php");
    }
}

// active account
if(isset($_GET['action'])=='active') {

    if(isset($_POST['check'])) {
        include 'Models/verifyDB.php';
        $vkey=$_POST['key'];
        echo $vkey;
        $resultCheck=checkAccount($vkey);
        $result=$resultCheck->rowCount();

        if($result >0) {

            $update=update($vkey);

            if($update) {
                echo "your account was activated";
            }

            else {
                echo 'your account activated or invalid';
            }
        }
    }
}

//logout
if(isset($_GET['module'])=='logout') {
    include 'models/logout.php';
}

//update infor product
if (isset($_GET['function'])) {
    if ($_GET['function']=='insertProduct') {
        $path='images/';

        if (isset($_FILES['image'])) {
            if ($_FILES['image']['tmp_name'] !=null) {
                $filename=$_FILES['image']['name'];
                $path=$path.$filename;

                //tmp_name: luu duong dan goc cua file vao bo nho tam
                if(move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
                    require('models/productDB.php');
                    $productname=$_POST['productname'];
                    $price=(float)$_POST['price'];
                    $des=$_POST['des'];
                    $insert_product=insertProduct($productname, $price, $path, $des);

                    if($insert_product > 0) {
                        header("Location:views/home.php");
                    }
                }
            }
        }
    }

    //update product
    else if ($_GET['function']=='updateProduct') {
        $path='images/';
        $filename=$_FILES['image']['name'];
        $path=$path.$filename;

        //tmp_name: luu duong dan goc cua file vao bo nho tam
        if(move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
            include 'models/productDB.php';
            $update_product=updateProduct($_GET['id'], $_POST['productname'], (float)$_POST['price'], $path, $_POST['des']);

            if ($update_product >0) {
                header("Location:views/home.php");
            }
        }
    }

    // delete product
    else if($_GET['function']=='deleteProduct') {
        if ($_GET['function']=='deleteProduct') {
            include 'models/productDB.php';
            $delete_product=deleteProduct($_GET['id']);

            if ($delete_product >0) {
                header("Location:views/home.php");
            }
        }
    }
}




?>