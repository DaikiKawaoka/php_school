<?php
$title='Q10';
$h1='【ファイル書き込み】';
$p='phpのファイル書き込みによって作成されたhtmlファイル';
$img='photo1.jpg';
$msg=<<<EOD
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{$h1}</h1>
    <p>{$p}</p>
    <img src={$img}>
</body>
</html>
EOD;

$file=fopen("out.html","w+");
flock($file,LOCK_EX);
fwrite($file,$msg);
flock($file,LOCK_UN);
fclose($file);
print "HTMLファイルを作成しました。";
print "<a href='out.html'><button>aaa</button></a>"
?>