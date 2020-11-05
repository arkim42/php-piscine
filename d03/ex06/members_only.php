<?php

$id = 'zaz';
$pw = 'Ilovemylittleponey';


if ($_SERVER['PHP_AUTH_USER'] == $id && $_SERVER['PHP_AUTH_PW'] == $pw)
{
	header('content-type: text/html');
	$img = base64_encode(file_get_contents('../img/42.png'));
	echo "<html><body>\nHello Zaz<br />\n<img src='data:image/png;base64,";
	echo $img;
	echo "'>\n</body></html>\n";
}
else
{
	// header('Connection: close');
	header('HTTP/1.0 401 Unauthorized');
	header('Date: Tue, 26 Mar 2013 09:42:42 GMT');
	header('Server: Apache');
	header("WWW-Authenticate: Basic realm=''Member area''");
	header_remove("Authentication problem. Ignoring this.");
	echo "<html><body>That area is accessible for members only</body></html>\n";
}

?>