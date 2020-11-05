#!/usr/bin/php
<?php

if ($argc >= 2)
{
	$res = array_filter(explode(' ', $argv[1]));
	$argv = array_splice($argv, 2, $argc - 2);
	foreach($argv as $name)
	{
		$tmp = array_filter(explode(' ', $name));
		$res = array_merge($res, $tmp);
	}
	sort($res);
	foreach($res as $idx => $name)
	{
		if ($idx == 0)
			echo $name;
		else
			echo "\n$name";
	}
}

?>