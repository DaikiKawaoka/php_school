<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Smarty</title>
</head>
<body>
<ul>
  <li>ISBNコード：{$book.isbn}</li>
  <li>書名：{$book.title}</li>
  <li>価格：{$book.price|number_format}円
    {if $book.price < 2500}［Low Price!!］{/if}</li>
  <li>刊行日：{$book.published|date_format: '%Y/%m/%d'}刊行</li>
</ul>
</body>
</html>
