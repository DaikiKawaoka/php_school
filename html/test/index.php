<?php
$dsn = 'mysql:host=myapp-db;dbname=selfphp;charset=utf8';
$usr = 'sample-user';
$passwd = 'password/';

try {
  $db = new PDO($dsn, $usr, $passwd);
  print '接続に成功しました。';
} catch (PDOException $e) {
  print "接続エラー：{$e->getMessage()}";
} finally {
  $db = null;
}