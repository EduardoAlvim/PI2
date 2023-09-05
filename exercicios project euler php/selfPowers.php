<?php
$i=1000;
$sum=0;
for($i=10;$i>0;$i--){
    $sum = $sum + pow($i,$i);
}
echo $sum;
?>