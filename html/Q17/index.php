<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        table {
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <?php
    require_once "function.php";
        list($max,$min,$avg,$num)=checkData(66,11,33,51,73,91,83,61,43,21);
        print "最高点{$max}、最低点：{$min}、平均点：{$avg}、合格者数：{$num}<br>";
        list($max,$min,$avg,$num)=checkData(55,25,43,67,81,100,55);
        print "最高点{$max}、最低点：{$min}、平均点：{$avg}、合格者数：{$num}<br>";
    ?>
</body>

</html>