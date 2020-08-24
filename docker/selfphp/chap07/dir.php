<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>DirectoryIterator クラス</title>
</head>
<body>
<table border="1">
<tr>
<th>ファイル</th><th>サイズ</th><th>最終アクセス日</th><th>最終更新日</th>
</tr>
<?php
$dir = new DirectoryIterator('./');
foreach ($dir as $file) {
  if ($file->isFile()) {
?>
  <tr>
    <td><?php print mb_convert_encoding($file->getFileName(), 'UTF-8', 'SJIS-WIN'); ?></td>
    <td><?php print $file->getSize(); ?>B</td>
    <td><?php print date('Y/m/d H:i:s', $file->getATime()); ?></td>
    <td><?php print date('Y/m/d H:i:s', $file->getMTime()); ?></td>
  </tr>
<?php
  }
}
?>
</table>
</body>
</html>