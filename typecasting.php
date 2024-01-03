<?php
$var1 = "45";
$var2 = 4;
echo $var1 + $var2; //here o/p will be 49 , as php will typecast the " 45" to an integer for the sake of mathemtatical operation

echo "<br/> ";

echo gettype($var1);

//confusing

echo "<br/> ";

$var2 = " 3 Akash Singh";
$var3 = $var2 +  " 3" ;
echo $var3;

?>