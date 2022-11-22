<?php

$n = 10;
$prev = 0;
$curr = 1;
$next = 0;

while($n > 0)
{
	echo "$prev ";
	$next = $prev + $curr;
	$prev = $curr;
	$curr = $next;
	$n--;
}
	
	
?>