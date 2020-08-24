<?php
set_error_handler(
  function ($errno, $errstr, $file, $line, $context) {
    throw new ErrorException($errstr, 0, $errno, $file, $line);
  }
);

try {
  mb_convert_encoding();
} catch (ErrorException $e) {
  print "エラーメッセージ：{$e->getMessage()}";
}