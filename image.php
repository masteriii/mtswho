<?php
$fh = fopen('ip_list.txt', 'a');
fwrite($fh, $_SERVER['REMOTE_ADDR']."
");
fclose($fh);
$im = imagecreatefromjpeg("moo2.jpg");
header('Content-Type: image/jpeg');
imagejpeg($im);
imagedestroy($im);
?>