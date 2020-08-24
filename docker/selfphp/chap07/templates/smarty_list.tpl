<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Smarty</title>
</head>
<body>
<ul>
{*  *}
{foreach from=$books item=book}
  <li
    {if $book.price gt 3500}style="color:Red;"{/if}>
    <a href="http://www.wings.msn.to/index.php/-/A-03/{$book.isbn}">
      {$book.title}</a>
    （{$book.price|number_format:1}円／
      {$book.published|date_format: '%Y/%m/%d'}刊行）
  </li>
{/foreach}
</ul>
</body>
</html>
