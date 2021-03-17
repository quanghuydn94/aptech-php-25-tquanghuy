<?php
namespace authentication;

require_once 'authentication.php';

class Editor extends Authentication
{
    private  $license;
    public function __construct(
        string $firstName,
        string $lastName,
        string $email,
        string $password,
        string $time,
        string $license
    ) {
        parent::__construct($firstName, $lastName, $email, $password, $time);
        $this->license = $license;
    }
    
    final public function register()
    {
        $editorData = file_get_contents('file.json');
        $arrayData = json_decode($editorData, true);
        $addEditor = array(
            // "Editor"=> [
                "FirstName"=>$this->firstName,
                "LastName"=>$this->lastName,
                "Email"=>$this->email,
                "Password"=>$this->password,
                "Time"=>$this->time,
                "License"=>$this->license
                // ]
            );
        
        $arrayData[] = $addEditor;
        $resultData = json_encode($arrayData);
        file_put_contents('file.json',$resultData);
    }

    final public function login()
    {
        if (!empty($_GET['Email']) &&
            !empty($_GET['Password']) &&
            !empty($_GET['License'])) {
            $data = file_get_contents('file.json');
            $dataMember = json_decode($data, true);
            $check = false;

            foreach ($dataMember as $keys) {
                $Email = $keys['Email'];
                $Password = $keys['Password'];
                $License = $keys['License'];
                if ($_GET['Email'] === $Email &&
                    $_GET['Password'] === $Password &&
                    $_GET['License'] === $License) {
                        $check = true;
                        echo "Sign in successful!";
                        break;
                    }
            }
            if ($check = false) {
                echo "Email, Password or License does not correctly.";
            }
        } else {
            echo "Fills out all the field.";
        }
    }
    
    use validEmail, validPassword;
}

if (isset($_POST['submit'])) {
    $editorSignUp = new Editor(
        $_POST['firstName'],
        $_POST['lastName'],
        $_POST['email'],
        $_POST['password'],
        $time,
        $_POST['License']
    );

    $editorSignUp->vlEmail();
    $editorSignUp->vlPassword();

    if ($editorSignUp->checkEmail == true && $editorSignUp->checkPassword == true) {
        echo "Register successfull!";
        $editorSignUp->register();
    }
}

if (isset($_GET['button'])) {
    $editorSignIn = new Editor(
        empty($_GET['lastName']),
        empty($_GET['firstName']),
        $_GET['Email'],
        $_GET['Password'],
        $time,
        $_GET['License']
    );
    $editorSignIn->login();
}