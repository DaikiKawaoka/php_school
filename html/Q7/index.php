<!DOCTYPE html>
<html>
<?php
$msg = "文字列関数は、文字列の加工や整形、部分文字列の検索／取得などを提供する"; //処理対象文字列
$key = "文字列"; //検索文字列
$rep = "数字"; //置換え文字列
$cut = "、"	//区切り文字
?>

<head>
    <meta charset="UTF-8" />
    <title>文字列操作</title>
</head>

<body>
    <h1>文字列操作</h1>
    <?php
    printf("<h2>対象文字列：%s</h2>",$msg);
    printf("%s","<h2>・文字数</>");
    printf("%s",mb_strlen($msg));
    printf("%s","<h2>・最初に現れる文字列の位置</h2>");
    printf("%s",mb_strpos($msg,$key)+1);
    printf("%s","<h2>・財後に現れる文字列の位置</h2>");
    printf("%s",mb_strrpos($msg,$key)+1);
    printf("%s","<h2>・数字で文字列を置換え</h2>");
    printf("%s",str_replace($key,$rep,$msg));
    printf("%s","<h2>・、で分割</h2>");
    $array = explode($cut,$msg);
    foreach($array as $a){
        print $a;
        print "<br>";
    }

    ?>
</body>

</html>