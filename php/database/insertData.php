<?php 
    function insertData() {   
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "huytran";

        //create connection
        $conn = new mysqli($servername, $username, $password, $database);

        $conn->set_charset("utf8");

        //check connection
        if($conn->connect_error) {
            die("Connection failed:". $connect->connect_error);
        }
        
        //insert data into database
        $email = "";
        $firstName = "";
        $lastName = "";

        $firstName = $_POST['fName'];   
        $lastName = $_POST['lName'];  
        $email = $_POST['Email'];
         
        //fetch data
        $query = "INSERT INTO userprivate (firstname, lastname, email) 
                VALUES ( '$firstName','$lastName', '$email')"; 

        $result = mysqli_query($conn,$query);
        
         
         
        $conn->close();
        header('Location: answer.html ');
    
    }
    