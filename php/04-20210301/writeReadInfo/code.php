<?php
// var_dump($_POST);

    if($_POST['fname'] !="" && $_POST['pword'] != "" )
    {
        $file = fopen("file.json", "r+") or die("not found");
        echo fread($file,filesize("file.json"));
        $myfile = json_encode($file);
        $arrayData = json_decode($myfile);
        $numberAge = (int)$_POST['numberage'];
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $date = date("Y-m-d H:i:sa");
        $addInfo = array(
                        "fname" => $_POST['fname'],
                        "pword" => $_POST['pword'],
                        "age" => $numberAge,
                        "time" => $date);

        $arrayData[] = $addInfo;
        $resultData = json_encode($arrayData);
        
        // echo $date;
        // echo $addInfo[2];
        // echo $arrayData;
        // var_dump($resultData );
        // echo "<br>";
        // $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

        // echo json_encode($age);
        // echo "<br>";
        // var_dump($age);
        fwrite($file,$resultData."\n");
        fclose($file);
         
    }else{

        echo "Type to the field!";
    }

?>

<br><a href="index.php">Go back!</a>