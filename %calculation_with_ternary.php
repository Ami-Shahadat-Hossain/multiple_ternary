<?php 
//Step--1
$Tution_fee=28000;
echo $commission=($Tution_fee>20000) ? ("Commission = " . $Tution_fee*25/100) : (($Tution_fee<20000 && $Tution_fee>10000) ? ("Commission =" . $Tution_fee*20/100) : (($Tution_fee<10000 && $Tution_fee>7000) ? ("Commission = " .$Tution_fee*15/100) : "Invalid"));
echo "\n";

//Step--2
$fee=8000;
echo $commission=($fee>20000) ? ("Commission is 25%") : (($fee<20000 && $fee>10000) ? ("Commission is 20%") : (($fee<10000 && $fee>7000) ? ("Commission is 15% ") : "Invalid"));
?>