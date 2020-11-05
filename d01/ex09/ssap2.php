#!/usr/bin/php
<?php

function	ft_split($argv)
{
	$tmp = array_values(array_filter(explode(' ', $argv)));
	sort($tmp);	
	return ($tmp);
}

function	ft_ascii($c)
{
	$ascii = ord($c);
	if ($c >= '0' && $c <= '9')
		$ascii += 200;
	else if ($c >= 'a' && $c <= 'z')
		$ascii -= 32;
	else if (!ctype_alpha($c))
		$ascii += 1000;
	return ($ascii);
}

function	ft_sort($a, $b)
{
	$len = min(strlen($a), strlen($b));
	$i = 0;
	while ($i < $len && $a[$i] == $b[$i])
		$i++;
	return (ft_ascii($a[$i]) - ft_ascii($b[$i]));
}

if ($argc >= 2)
{
	$res = array_filter(explode(' ', $argv[1]));
	$argv = array_splice($argv, 2, $argc - 2);
	foreach($argv as $name)
	{
		$tmp = ft_split($name);
		$res = array_merge($res, $tmp);

	}
	usort($res, "ft_sort");
	foreach($res as $idx => $name)
	{
		if ($idx == 0)
			echo $name;
		else
			echo "\n$name";
	}
}

?>