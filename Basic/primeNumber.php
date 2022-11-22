<?php

$n = 2;
$flag = 0;

for($i = 2;$i<$n;$i++)
{
	if($n % $i == 0)
	{
		$flag = 1;
	}
}

if($flag)
{
	echo "Not Prime";
}
else
{
	echo "Prime";
}

?>