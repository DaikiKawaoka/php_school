<?php 
spl_autoload_register(function($fqcn) {
  $prefix = 'lib/';
  
  $nsPos = strripos($fqcn, '\\');
  if ($nsPos === false) {
    $path = $prefix.$fqcn.'.class.php';
  } else {
    $ns = substr($fqcn, 0, $nsPos);
    $scn = substr($fqcn, $nsPos + 1);
    $path = $prefix.str_replace('\\', '/', $ns).'/'.$scn.'.class.php';
  }
  require_once $path;
});
