<?php
// This simple script in php stores the ip of the person who opens it in a text file
// To always have the IP for consultation updated, you can have a local script that is executed at regular time intervals
//In my case I use a bash script, which is called by cron every five minutes
$file = fopen('ip.txt', 'w');
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
fwrite($file, $ip);
fclose($file);
?>
