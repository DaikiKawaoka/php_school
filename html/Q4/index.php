<!DOCTYPE html>
<html>
<?php
$ary = [
    26.3, 22.2, 27, 28.9, 28.4, 30.2, 30.7, 25.2, 27.4, 26.2,
    26.3, 26.7, 29.3, 24.9, 19.5, 25.7, 26.7, 25.3, 29, 29.5,
    29.1, 28.5, 25.2, 27.7, 30, 29.4, 30.4, 30.9, 29.2, 26.6
];
?>

<head>
    <meta charset="UTF-8" />
    <title>演習問題</title>
    <style type="text/css">
        .col {
            color: red;
        }
    </style>
</head>

<body>
    <h3>令和元年（２０１９年）松山市６月の最高気温</h3>
    <table border="1">
        <tr><th>日</th><th>温度</th></tr>
        <?php
        $i = 1;
        foreach ($ary as $ary1) {
            if ($ary1 <= 30) {
                print "<tr><td>{$i}</td><td>{$ary1}</td></tr>";
            } else {
                print "<tr><td>{$i}</td><td class='col'>{$ary1}</td></tr>";
            }
            $i++;
        }
        ?>
    </table>
</body>

</html>