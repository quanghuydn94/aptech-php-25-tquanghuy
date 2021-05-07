<?php
 
 if (isset($_POST['submit'])) {
    function login() {
     
        require_once ("connData.php");
        
        $email = "";
        $firstName = "";
        $lastName = "";

         
            if (isset($_POST['fName'])) { $firstName = $_POST['fName']; }
            if (isset($_POST['lName'])) { $lastName = $_POST['lName']; }
            if (isset($_POST['Email'])) { $email = $_POST['Email']; }
        

        //fetch data
        $query = "INSERT INTO userprivate (firstname, lastname, email) 
                VALUES ( '$firstName','$lastName', '$email')"; 

        $result = mysqli_query($connect,$query);
        
        $connect->close();
       
    }
 }