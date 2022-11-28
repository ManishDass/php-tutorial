<?php

$n = 1634;
$temp = $n;
$rem = 0;
$sum = 0;

while($n > 0)
{
	$rem = $n % 10;
	$sum += $rem ** strlen((string)$temp);
	$n = floor($n/10);
}

echo $sum;

?>