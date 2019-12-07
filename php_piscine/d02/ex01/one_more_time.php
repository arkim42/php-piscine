#!/usr/bin/php
<?php
date_default_timezone_set("Europe/Paris");
$weekday = "([Ll]undi|[Mm]ardi|[Mm]ercredi|[Jj]eudi|[Vv]endredi|[Ss]amedi|[Dd]imanche)";
$numday = "([0-9]{1,2})";
$month = "([Jj]anvier|[Ff]vrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]out|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd]ecembre)";
$year = "([0-9]{4})";
$hrnsec = "([0-9]{2}):([0-9]{2}):([0-9]{2})";
$months = array("janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre");

if ($argc >= 2)
{
	if (preg_match("/$weekday $numday $month $year $hrnsec/", $argv[1], $res))
		echo (mktime($res[5], $res[6], $res[7], array_search(lcfirst($res[3]), $months) + 1, $res[2], $res[4]))."\n";
	else
		echo "Wrong Format\n";
}

?>