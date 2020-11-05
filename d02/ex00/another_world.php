#!/usr/bin/php
<?php

if ($argc >= 2)
{
	$str = trim($argv[1]);
	echo preg_replace("/[ \r\t]+/", " ", $str)."\n";
}

?>