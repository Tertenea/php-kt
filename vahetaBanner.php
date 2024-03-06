<?php
header('Content-Type: image/jpeg');
$pildid = ['pilt1.jpg', 'pilt2.jpg', 'pilt3.jpg', 'pilt4.jpg'];
$juhuslikPilt = $pildid[array_rand($pildid)];
readfile($juhuslikPilt);
?>
