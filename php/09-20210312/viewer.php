<?php
namespace authentication;
require_once 'authentication.php';
class Viewer extends Authentication
{
    public function __construct(
        string $firstName,
        string $lastName,
        string $email,
        string $password,
        string $time 
    ) {
        parent::__construct($firstName, $lastName, $email, $password, $time);
    }

    final public function register()
    {   
        if (isset($_POST['submit'])) {
            $viewerData = file_get_contents("file.json");
            $arrayViewer = json_decode($viewerData, true);
            $addViewer = array(
                // "viewers"=>[
                    "FirstName"=>$this->firstName,
                    "LastName"=>$this->lastName,
                    "Email"=>$this->email,
                    "Password"=>$this->password,
                    "Time"=>$this->time
                    // ]
                );
            
            $arrayViewer[] = $addViewer;
            $resultViewer = json_encode($arrayViewer);
            file_put_contents('file.json',$resultViewer);
        }
         
    }

    final public function login()
    {   
        if (!empty($_GET['Email']) && !empty($_GET['Password'])) {
            $file = fopen('file.json', 'r');
            $dataRaw = fread($file, filesize('file.json'));
            $dataMember = json_decode($dataRaw, true);
            $check = false;
            foreach ($dataMember as $keys) {
                $Email = $keys['Email'];
                $Password = $keys['Password'];

                if ($_GET['Email'] === $Email
                    &&
                    $_GET['Password'] === $Password
                ) {
                    $check = true;
                    echo "Sign in successfull!";
                    break;
                }
            }
            if ($check === false) {
                echo "Email or Password does not match.";
            }
        } else {
            echo "Fills out all the field.";
        }
    }

    use validEmail, validPassword;
}
if (isset($_POST['submit'])) {
    $viewerSignUp = new Viewer(
        $_POST['lastName'],
        $_POST['firstName'],
        $_POST['email'],
        $_POST['password'],
        $time
    );

    $viewerSignUp->vlEmail();
    $viewerSignUp->vlPassword();

    if ($viewerSignUp->checkEmail == true && $viewerSignUp->checkPassword == true) {
        echo "Register Successfull!";
        $viewerSignUp->register();
    }
}

if (isset($_GET['button'])) {
    $viewerSignIn = new Viewer(
        empty($_POST['firstName']),
        empty($_POST['lastName']),
        $_GET['Email'],
        $_GET['Password'],
        $time
    );
    $viewerSignIn->login();
}