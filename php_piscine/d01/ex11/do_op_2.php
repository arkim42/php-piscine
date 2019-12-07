#!/usr/bin/php
<?php

function	do_op_2($a, $op, $b)
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

function	ft_split($argv)
{
	$tmp = array_values(array_filter(explode(' ', $argv)));
	sort($tmp);	
	return ($tmp);
}

if ($argc == 2)
{
	$tmp = trim($argv[1]);
	$a = intval($tmp);
	if (strpos())


	$tmp = ft_split("$op", $tmp);
	echo "$a\n";
	print_r($tmp);
	// $tmp = preg_split("/\s+[\d]+./", $argv[1]);
	echo $tmp;
	// $tmp = preg_split("/\s+[0-9]+\s+|(\+|\-|\*|\/|\%)+\s+|[0-9]/", trim($argv[1]));
	
	// $tmp = preg_split("/[a-zA-Z]+|[0-9]+(?:\.[0-9]+)?|\.[0-9]+/", $argv[1]);
	print_r($tmp);
	// if (count($tmp))
}




// echo (do_op_2(trim($argv[1]), trim($argv[2]), trim($argv[3])));
// else
// 	echo "Incorrect Parameters";
// echo "\n";

?>