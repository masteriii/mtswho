<?php
$fh = fopen('ip_list.txt', 'a');
fwrite($fh, $_SERVER['REMOTE_ADDR']."
");
fclose($fh);
$im = imagecreatefromjpeg("n00b.png");
header('Content-Type: image/jpeg');
imagejpeg($im);
imagedestroy($im);
?>