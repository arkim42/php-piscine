#!/usr/bin/php
<?PHP
date_default_timezone_set("Europe/Paris");
function get_month($month)
{
	$checker = lcfirst($month);
	$month_val = array("janvier" => 1,
						"fevrier" => 2,
						"mars" => 3,
						"avril" => 4,
						"mai" => 5,
						"juin" => 6,
						"juillet" => 7,
						"aout" => 8,
						"septembre" => 9,
						"octobre" => 10,
						"novembre" => 11,
						"decembre" => 12);
	return ($month_val[$checker]);
}
if ($argc > 1)
{
	$find_week = "([Ll]undi|[Mm]ardi|[Mm]ercredi|[Jj]eudi|[Vv]endredi|[Ss]amedi|[Dd]imanche)";
	$find_month = "([Jj]anvier|[Ff]vrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]out|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd]ecembre)";
	$find_hrmnsec = "([0-9]{2}):([0-9]{2}):([0-9]{2})";
	if (preg_match("/$find_week ([0-9]{1,2}) $find_month ([0-9]{4}) $find_hrmnsec/", $argv[1], $res))
		echo (mktime($res[5], $res[6], $res[7], get_month($res[3]), $res[2], $res[4]))."\n";
	else
		echo "Wrong Format\n";
}

?>