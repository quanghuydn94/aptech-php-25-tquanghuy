<?php

    if($_POST['fname'] !="" && $_POST['pword'] != "" )
    {
        $file = fopen("file.json", "w") or die("not found");
        echo fread($file,filesize("file.json"));
        
        $numberAge = (int)$_POST['numberage'];
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $date = date("Y-m-d H:i:sa");
        $addInfo = array(
                        "fname"=>$_POST['fname'],
                        "pword"=>$_POST['pword'],
                        "age"=>$numberAge,
                        "time"=>$date);
       
        // $addInfo = '{
        //         "user":
        //         [
        //             {
        //                 "fullname": $_POST['fname'],
        //                 "password": $_POST['pword'],
        //                 "age": $numberAge,
        //                 "time": $date
        //             }
        //         ]
        // }';
       
        $arrayData = array( );
        array_push($arrayData, $addInfo);
        fwrite($file,json_encode($arrayData));
        fclose($file);
         
    }else{

        echo "Type to the field!";
    }

?>

<br><a href="index.php">Go back!</a>