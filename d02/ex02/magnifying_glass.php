#!/usr/bin/php
<?php

if ($argc == 2)
{
	$fd = fopen($argv[1], "r");
	$line = fread($fd, filesize($argv[1]));
	$pattern = "/(<a )(.*?)(>)(.*)(<\/a>)/s";
	
	function	replace($match)
	{
		$pattern1 = "/(title=\")(.*?)(\")/";
		$pattern2 = "/(>)(.*?)(<)/s";
		$match[0] = preg_replace_callback($pattern1, function($match) {
			return $match[1].strtoupper($match[2]).$match[3];
		}, $match[0]);
		$match[0] = preg_replace_callback($pattern2, function($match) {
			return $match[1].strtoupper($match[2]).$match[3];
		}, $match[0]);
		return ($match[0]);
	}
	$line = preg_replace_callback($pattern, "replace", $line);
	echo $line;
	fclose($fd);
}

?>
