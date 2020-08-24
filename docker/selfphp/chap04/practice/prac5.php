<?php
$language = 'PHP';
if ($language === 'PHP' || $language === 'JSP' || $language === 'ASP') {
  print 'サーバサイド技術';
} elseif ($language === 'JavaScript' || $language === 'VBScript') {
  print 'クライアントサイド技術';
}
