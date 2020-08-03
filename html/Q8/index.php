<!DOCTYPE html>
<html>
<?php
$ary1 = [10, 30, 50];
$ary2 = [60, 40, 20];
?>

<head>
    <meta charset="UTF-8" />
    <title>配列操作</title>
</head>

<body>
    <h1>配列操作</h1>
    <?php
    print("配列\$ary1:");
    print_r($ary1);
    print("<br>配列\$ary2:");
    print_r($ary2);
    printf("<br>配列\$ary1と\$ary2を結合し、配列\$ary3を作成");
    $ary3=array_merge($ary1,$ary2);
    print("<br>配列\$ary3:");
    print_r($ary3);
    print("<br>配列\$ary3の要素数<br>");
    print(array_unshift($ary3));
    print("要素<br>");
    print("配列\$art3の末尾に80,70を追加、先頭を1要素削除<br>");
    array_push($ary3, 70,80 );
    array_shift($ary3);
    print("配列\$ary3:");
    print_r($ary3);
    print("<br>配列\$art3を降順にソート<br>");
    print("配列\$ary3:");
    rsort($ary3,SORT_NUMERIC);
    print_r($ary3);
    print("<br>配列\$art3の先頭と末尾以外を削除する<br>");
    array_splice($ary3,1,array_unshift($ary3)-2);
    print("配列\$ary3:");
    print_r($ary3);
    ?>
</body>

</html>