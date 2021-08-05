<?php
require_once 'models/connectDB.php';
require_once 'controllers/show.php';

if (isset($_POST['url'])) {
    $url = $_GET['url'];
} else {
    $url = 'show';
}
switch ($url) {
    case 'show':
        $list_user = get_all_user();
        
        if (isset($_GET['action']) && $_GET['action'] =='del') {
            del_user($_GET['id']);
            header("location: index.php");
        }
        require_once 'views/show.php';
        break;
    case 'insert':

        if(isset($_POST['firstname'])) {
            
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            insert_user($firstname,$lastname,$email);
            header("location: index.php");
        }
        require_once 'views/insert.php';
        break;
    default:
        # code...
        break;
}