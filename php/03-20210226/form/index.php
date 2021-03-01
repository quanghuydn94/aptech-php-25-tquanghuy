<?php
for($i = 2; $i <=100; $i++){
    $a = true;
    for($j = 2; $j<($i -1); $j++){
        $snt = $i%$j;
        if ($snt == 0){
        $a =false;
        }
    }
    if ($a ==false){
        //echo " $i là không phải số nguyên tố <br>";
        continue;
    }
    else{
        echo "$i là số nguyên tố <br>";
    }

}
// form log in
