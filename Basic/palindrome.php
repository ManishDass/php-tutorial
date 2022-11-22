<?php

$n = 1211;
$len = strlen((string)$n);
$rem = 0;
$sum = 0;
$temp = $n;

for($i = 0;$i<$len;$i++)
{
	$rem = $n % 10;
	$sum = $sum * 10 + $rem;
	$n = floor($n /10);
}

if($temp == $sum)
{
	echo "Palindrome";
}
else
{
	echo "Not Palindrome";
}



?>