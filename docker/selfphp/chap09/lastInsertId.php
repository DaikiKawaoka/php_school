<?php
require_once '../DbManager.php';

try {
  $db = getDb();
  $db->exec("INSERT INTO member (nam, sex, old, enter, memo) VALUES ('山田凜生', '男', 18, '2016-09-30', '')");
  print "直近のID値：{$db->lastInsertId()}";
} catch(PDOException $e) {
  print "エラーメッセージ：{$e->getMessage()}";
}