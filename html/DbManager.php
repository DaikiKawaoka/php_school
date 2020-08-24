<?php
function getDb() {
  $dsn = 'mysql:host=myapp-db;dbname=selfphp;charset=utf8';
  $usr = 'sample-user';
  $passwd = 'password/';

    $db = new PDO($dsn, $usr, $passwd);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$db = new PDO($dsn, $usr, $passwd, [PDO::ATTR_PERSISTENT => true);
  return $db;
}