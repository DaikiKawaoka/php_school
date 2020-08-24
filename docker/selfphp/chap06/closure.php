<?php
function my_array_walk(array $array, callable $func) {
  foreach($array as $key => $value) {
    $func($value, $key);
  }
}

$data = ['杉山', '長田', '杉沼', '和田', '土井'];
my_array_walk($data, 
  function($value, $key) {
    print "{$key}：{$value}<br />";
  }
);