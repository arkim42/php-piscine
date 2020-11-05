#!/usr/bin/php
<?php

$fd = fopen("/var/run/utmpx", "r");
date_default_timezone_set("America/Los_Angeles");
while ($data = fread($fd, 628))
{
    $data = unpack("a256user/a4id/a32line/ipid/itype/itime", $data);
    if ($data['type'] == 7)
    {
        echo trim($data['user'])."\t ";
        echo trim($data['line'])."  ";
        $time = date("M d H:i", $data['time']);
        echo $time."\n";
    }
}

?>