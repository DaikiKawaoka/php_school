<?php 
require_once 'MySmarty.class.php';

$s = new MySmarty();
$s->assign('books', [
  [
    'isbn' => '978-4-7981-4402-3',
    'title' => '独習ASP.NET 第5版',
    'price' => 3800,
    'published' => '2016-01-21',
  ],
  [
    'isbn' => '978-4-7981-3546-5',
    'title' => 'JavaScript逆引きレシピ',
    'price' => 3000,
    'published' => '2014-08-28',
  ],
  [
    'isbn' => '978-4-7981-4034-6',
    'title' => '10日でおぼえるJSP＆サーブレット入門教室',
    'price' => 2800,
    'published' => '2015-03-16',
  ],
  [
    'isbn' => '978-4-7981-4102-2',
    'title' => 'プログラマのためのDocker教科書',
    'price' => 3000,
    'published' => '2015-11-19',
  ],
  [
    'isbn' => '978-4-7741-7568-3',
    'title' => 'AngularJSアプリケーションプログラミング',
    'price' => 3700,
    'published' => '2015-08-19',
  ],
  [
    'isbn' => '978-4-8222-9644-5',
    'title' => 'アプリを作ろう！ Android入門',
    'price' => 2000,
    'published' => '2015-08-21',
  ]
]);
$s->d();
