<?php

if ($_GET)
{
	if ($_GET["action"] == "set")
		setcookie($_GET["name"], $_GET["value"], time() + 3600, "/");
	else if ($_GET["action"] == "get")
	{
		if (isset($_COOKIE[$_GET["name"]]))
			echo ($_COOKIE[$_GET["name"]]);
	}
	else if ($_GET["action"] == "del")
		setcookie($_GET["name"], $_GET["value"], 0);
}
/* 
curl -c cook.txt 'http://localhost:8000/ex03/cookie_crisp.php?action=set&name=plat&value=choucroute'
curl -b cook.txt 'http://localhost:8000/ex03/cookie_crisp.php?action=get&name=plat'
curl -c cook.txt 'http://localhost:8000/ex03/cookie_crisp.php?action=del&name=plat'
curl -b cook.txt 'http://localhost:8000/ex03/cookie_crisp.php?action=get&name=plat'
 */
?>