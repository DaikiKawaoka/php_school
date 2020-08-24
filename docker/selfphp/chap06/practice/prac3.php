<?php
function processNumber(callable $func, float ...$args): array {
  foreach ($args as $arg) {
    $result[] = $func($arg);
  }
  return $result;
}
list($x, $y) = processNumber(
  function(float $num): float { return $num * $num; },
  5, 15);
print $x;
print '<br />';
print $y;