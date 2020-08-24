<?php
require_once '../../vendor/autoload.php';
$s = new Smarty();
$s->assign('book', [
  'isbn' => '978-4-7981-4402-3',
  'title' => '独習ASP.NET 第5版',
  'price' => 1800,
  'published' => '2016-01-21',
]);
$s->display('prac3.tpl');
