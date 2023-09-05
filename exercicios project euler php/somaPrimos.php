<?php

$num = 2000000;
$sum = 0;

while($num > 1){
    $i=0;
    $aux=0;
    for($i=$num-1;$i>1;$i--){
        if($num % $i == 0){
            $aux++;
        }
    }
    if($aux == 0){
        $sum = $sum + $num;
    }
    $num--;
}
echo $sum;

?>