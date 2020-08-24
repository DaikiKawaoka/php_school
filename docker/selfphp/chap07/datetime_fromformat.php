<?php
$fmt = 'Y年m月d日 H時i分s秒';
$time = '2016年08月05日 11時58分32秒';
$dt = DateTime::createFromFormat($fmt ,$time);
print $dt->format('Y-m-d H:i:s');