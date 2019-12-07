#!/usr/bin/php
<?php

$stdin = fopen("php://stdin", "r");
while ($stdin && !feof($stdin))
	{
		echo "Enter a number: ";

		$num = fgets(STDIN);
		$num = trim($num);

	if (is_numeric($num))
	{
		if ($num % 2 == 0)
			echo "The number '$num' is even";
		else
			echo "The number '$num' is odd";
	}
	else
	{
		if (feof(STDIN))
		{
			echo "\n";
			exit();
		}
		echo "'$num' is not a number";
	}
echo "\n";
}
?>