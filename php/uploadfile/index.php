<?php if ( !isset($_GET['page'])) {
    header("Location:views/home.php");
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