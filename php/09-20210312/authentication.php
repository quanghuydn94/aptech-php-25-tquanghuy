<?php
namespace authentication;

abstract class Authentication
{
        protected  $firstName, $lastName, $email, $password, $time;
    
    public function __construct(
        string $firstName,
        string $lastName,
        string $email,
        string $password,
        string $time
    ) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->time = $time;
    }

    abstract function register();
    abstract function login();
}
 
trait validEmail {
    public $checkEmail;

    public function vlEmail() {
        if(isset($_POST['submit'])) {
            if(empty($_POST['email'])) {
                echo "fills out this field!";
            } else {
                $this->checkEmail = true;
                $patternEmail = '/^[a-zA-Z\_\-]+@[a-zA-Z]{3,5}+(\.[a-zA-Z]{2,3}){1,2}$/i';
                if (!preg_match($patternEmail, $_POST['email'])) {
                    $this->checkEmail = false;
                    echo "Invalid Email!"; 
                }
                 
                
            }
            
        }
    }
}
 
trait validPassword {
    public $checkPassword;
    public function vlPassword() {
        
        if (empty($_POST['password'])) {
            echo "Fills out this field! ";
        } else {
            $this->checkPassword = true;
            $patternPassword = '/^\S*(?=\S{8,})(?=\S*[A-Z]{1,})(?=\S*[\d]{1,})(?=\S*[a-z])(?=\S*[!@#$%^&*()-_=+]{1,})\S*$/i';
            if (!preg_match($patternPassword, $_POST['password'])) {
                $this->checkPassword = false;
                echo "At least 1 uppercase, 1 digit, 1 special character!";
            }
        }
           
         
        
    }
}
date_default_timezone_set("Asia/Ho_Chi_Minh");
$time = date("Y-m-d H:i:sa");  