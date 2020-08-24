<?php
function sum() {
  $result = 0;
  $args = func_get_args();
  foreach ($args as $arg) {
    $result += $arg;
  }
  return $result;
}

print sum(7, 3, 10);
print '<br />';
print sum(11, -5, 4, 88);
