#!/usr/bin/php
<?php

// if ($argc > 1)
// {
//     $c = curl_init($argv[1]);
//     $str = curl_exec($c);
//     echo $str;
// }

$c = curl_init("https://www.42.fr");
$str = curl_exec($c);
// echo $str;

preg_match_all("/(<img src=\")(.*?)(\")/", $str, $out);
echo $out[1][1];

?>
