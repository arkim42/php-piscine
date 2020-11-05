#!/usr/bin/php
<?php

function	ft_is_sort($str)
{
	$tmp = $str;
	sort($tmp);
	if ($tmp == $str)
		return (1);
	else
		return (0);
}
?>