<?php 
include 'connectDB.php';

function getAllProduct() {
    global $DB;
    $product = $DB->query("SELECT * FROM products");
    return $product;
}

function getProductById($id) {
    global $DB;
    $product = $DB->query("SELECT * FROM products WHERE Id = '$id'")->fetch();
    return $product;
}
function insertProduct($product,$price,$image,$des) {
    global $DB;
    $products = $DB->exec("INSERT INTO `products`(`ProductName`,`Price`,`ImagePath`,`Description`)
    VALUES ('$product','$price','$image','$des')");
    return $products;
}

function updateProduct($id,$product,$price,$image,$des) {
    global $DB;
    $update_products = $DB->exec("UPDATE  `products` SET `ProductName` = '$product',`Price` = '$price',`ImagePath` = '$image',`Description` = '$des'
    WHERE Id = '$id'");
    return $update_products;
}

function deleteProduct($id) {
    global $DB;
    $delete_products = $DB->exec("DELETE  FROM  `products` WHERE Id = $id");
    return $delete_products;
}
?>