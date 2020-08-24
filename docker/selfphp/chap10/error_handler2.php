<?php 
function hoge(int $x) {}

try {
  hoge('xxxx');
} catch (Exception $e) {
  print "例外：{$e->getMessage()}";
} catch (Error $e) {
  print "エラー：{$e->getMessage()}";
}
