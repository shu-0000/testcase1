<?php
$num = 8; 
$ar1 = range('a', 'z'); 
$ar2 = range('A', 'Z'); 
$ar3 = range(0, 9); 
$ar_all = array_merge($ar1, $ar2, $ar3);
shuffle($ar_all); 
echo substr(implode($ar_all), 0, $num);
?>