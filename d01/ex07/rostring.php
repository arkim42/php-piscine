#!/usr/bin/php
<?php

if ($argc >= 2)
{
	$res = array_values(array_filter(explode(' ', $argv[1])));
	foreach($res as $idx => $name)
	{
		if ($idx != 0)
			echo "$name ";
	}
	echo $res[0];
}

?>