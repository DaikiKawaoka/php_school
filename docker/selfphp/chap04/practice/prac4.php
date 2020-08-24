<?php
$language = 'PHP';
switch ($language) {
  case 'PHP' :
  case 'JSP' :
  case 'ASP' :
    print 'サーバサイド技術';
    break;
  case 'JavaScript' :
  case 'VBScript' :
    print 'クライアントサイド技術';
    break;
}
