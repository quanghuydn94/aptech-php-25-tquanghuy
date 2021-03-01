<?php
$x = 52;
$y = "Hello guys";

// Concatenate avariables
echo $y." ".$x;
echo "<br>";
$d = "$y $x"; 
$d = join(' - ', [$y,$x]);
var_dump($d);
echo "<br>";

//Plus Interger and Float
$z = 1.23;
$a =   $z -$x ;
echo(ceil($a));
echo "<br>";
echo(floor($a));
echo "<br>";
$shirt = ["Huy", "Binh", "Tai"];
var_dump($shirt);
echo $shirt[1];
//Operators

$b =4;
echo "<br>";
echo $b++;
$c= 1 + $b++;
echo "<br>";
echo $c;
echo "<br>";
echo $b;
echo "<br>";
echo ++$b;
echo "<br>";
echo $b;
echo "<br>";
$f =!$b;
$f = !null;
$f = !1;
$f = 'huy';
echo "<br>";
echo $f == "huy";
echo "<br>";
var_dump($f);
echo "<br>";
$t = date("H");
echo $t < "13" ? "Have a good day" : "Have a good night";
echo "<br>";
for ($i = 0; $i <=20; $i++){
    if ($i == 13){
       // continue;
    
    }
    echo "the number is $i <br>";
}
