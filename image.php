<?php
$img = 'test.jpg';
header('Content-Type: image/jpeg');
readfile($img);

$file = fopen("ip.txt","a");
$ip=$_SERVER['REMOTE_ADDR'];
echo fwrite($file,$ip);
fclose($file);
?>
