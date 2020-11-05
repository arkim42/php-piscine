#!/usr/bin/php
<?php

function	ft_split($argv)
{
	$tmp = array_values(array_filter(explode(' ', $argv)));
	sort($tmp);	
	return ($tmp);
}

?>