<!DOCTYPE html>
<html>
<?php
$ary = [
    ['政令指定都市', 'seirei.html', 'image/seirei.jpg'],
    ['明治村', 'meijimura.html', 'image/photo1.jpg'],
    ['沖縄の名所', 'meisyo.html', 'image/zakimi.jpg'],
];
?>

<head>
    <meta charset="UTF-8" />
    <title>演習問題</title>
    <style type="text/css">
    </style>
</head>

<body>
    <h1>リンク集</h1>
    <?php
        foreach($ary as $ary1){
            print "<a href='{$ary1[1]}'>{$ary1[0]}<br><img src='{$ary1[2]}'></a><br>";
        }
    ?>
</body>

</html>