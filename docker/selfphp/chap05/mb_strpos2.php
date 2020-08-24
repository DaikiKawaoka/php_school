<?php
mb_internal_encoding('UTF-8');
$str = 'にわにはにわにわとりがいる';
if (mb_strpos($str, 'にわ') != false) {
//if (mb_strpos($str, 'にわ') !== false) {
  print '文字列が見つかりました。';
}