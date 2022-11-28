<?php

$n = 12345;
$len = strlen((string)$n);
$rem = 0;
$sum = 0;

for($i = 0;$i<$len;$i++)
{
	$rem = $n % 10;
	$sum = $sum * 10 + $rem; 
	$n = floor($n /10);
}

echo $sum;



?>