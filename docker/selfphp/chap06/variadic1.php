<?php
function sum(float ...$args): float {
  $result = 0;
  foreach ($args as $arg) {
    $result += $arg;
  }
  return $result;
}

print sum(7, 3, 10);
print '<br />';
print sum(11, -5, 4, 88);
