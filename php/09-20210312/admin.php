<?php
namespace authentication;

require_once 'authentication.php';

class Admin extends Authentication 
{
    private  $identifier;

    public function __construct(
        string $firstName,
        string $lastName,
        string $email,
        string $password,
        string $time,
        string $identifier
    ) {
        parent::__construct($firstName, $lastName, $email, $password, $time, $identifier);
        $this->identifier = $identifier;
    }
    
    public function register()
    {    
         
             
            $currentData = file_get_contents('file.json');
            $arrayData = json_decode($currentData,true);
            $addInfo = array(
                // "admin"=> [
                    "FirstName"=> $this->firstName,
                    "LastName"=>$this->lastName,
                    "Email"=>$this->email,
                    "Password"=>$this->password,
                    "Time"=>$this->time,
                    "Identifier"=>$this->identifier          
                            // ]
                );
            
            $arrayData[] = $addInfo;
            $resultData = json_encode($arrayData);
            file_put_contents('file.json',$resultData);
    }
     
    public function login()
    {
        if (!empty($_GET['Email']) &&
            !empty($_GET['Password']) &&
            !empty($_GET['Identifier'])
            ) {
                $file = fopen('file.json', 'r');
                $dataRaw = fread($file,filesize('file.json'));
                $dataMember = json_decode($dataRaw, true);
                $check = false;

                foreach ($dataMember as $keys) {
                    $Email = $keys['Email'];
                    $Password = $keys['Password'];
                    $Identify = $keys['Identifier'];
                    var_dump($Identify);

                if ($_GET['Email'] === $Email &&
                    $_GET['Password'] === $Password &&
                    $_GET['Identifier'] === $Identify) {
                        $check = true;
                        echo "Sign in successful!";
                        break;
                    }
                }
            
            if ($check = false) {
                echo "Email, Password or Identifier does not match.";
            }
        } else {
            echo "Fills out all the field.";
        }
    }
    use validEmail, validPassword;
}

if (isset($_POST['submit'])) {
    $adminSignUp = new Admin(
        $_POST['firstName'],
        $_POST['lastName'],
        $_POST['email'],
        $_POST['password'],
        $time,
        $_POST['Identifier']
        
    );
    
    $adminSignUp->vlEmail();
    $adminSignUp->vlPassword();

    if ($adminSignUp->checkEmail == true && $adminSignUp->checkPassword == true) { 
        echo "Register Successfull";
        $adminSignUp->register();
    }
}

if (isset($_GET['button'])) {
    $adminSignIn = new Admin(
        empty($_POST['firstName']),
        empty($_POST['lastName']),
        $_GET['Email'],
        $_GET['Password'],
        $time,
        $_GET['Identifier']
    );
    $adminSignIn->login();
}

 