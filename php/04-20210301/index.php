<?php
$myfile = fopen("info.txt", "a+") or die(" unable to open file!");
echo fread($myfile, filesize("info.txt"));
$txt = "Enjoy my day!";
$NTN = "Have a nice day!";
fwrite($myfile, $txt."\n");
fwrite($myfile, $NTN ."\n"); 
fclose($myfile);
?>