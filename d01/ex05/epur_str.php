#!/usr/bin/php
<?php

if ($argc == 2)
{	
	$tmp = array_values(array_filter(explode(" ", $argv[1])));
	foreach($tmp as $idx => $name)
	{
		if ($idx == 0)
			echo $name;
		else
			echo " $name";
	}
	echo "\n";
}

?>