<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>アクセスログ</title>
</head>
<body>
<table border="1">
<tr>
  <th>アクセス日時</th><th>スクリプト名</th>
  <th>ユーザエージェント</th><th>リンク元のURL</th>
</tr>
<?php
$file = file('access.log');
foreach ($file as $fline) {
  $line = explode("\t", $fline);
  print '<tr>';
  foreach ($line as $value) {
    print '<td>' . $value . '</td>';
  }
  print '</tr>';
}
?>
</table>
</body>
</html>