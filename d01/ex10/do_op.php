#!/usr/bin/php
<?php

function	do_op($a, $op, $b)
{
	if ($op == '+')
		return ($a + $b);
	else if ($op == '-')
		return ($a - $b);
	else if ($op == '*')
		return ($a * $b);
	else if ($op == '/')
		return ($a / $b);
	else if ($op == '%')
		return ($a % $b);
	else
		return (0);
}

if ($argc == 4)
	echo (do_op(trim($argv[1]), trim($argv[2]), trim($argv[3])));
else
	echo "Incorrect Parameters";
echo "\n";

?>