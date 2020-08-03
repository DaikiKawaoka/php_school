<!DOCTYPE html>
<html>
<?php
$ary = [
    ['A001', 'りんご', 180, 3],
    ['A002', 'いちご', 398, 0],
    ['A003', 'キウイ', 98, 3],
    ['A004', 'メロン', 3000, 0],
    ['A005', 'バナナ', 198, 5]
];
?>

<head>
    <meta charset="UTF-8" />
    <title>演習問題</title>
    <style type="text/css">
    </style>
</head>

<body>
    <table border="1">
        <tr>
            <th>商品ID</th>
            <th>商品名</th>
            <th>単価</th>
            <th>個数</th>
            <th>金額</th>
        </tr>
        <tr>
            <?php
            for ($j = 0; $j < 5; $j++) {
                print "<tr>";
                for ($i = 0; $i < 5; $i++) {
                    if ($i == 4) {
                        print "<td>" . $ary[$j][$i - 2] * $ary[$j][$i - 1] . "</td>";
                    } else {
                        print "<td>" . $ary[$j][$i] . "</td>";
                    }
                }
                print "</tr>";
            }
            ?>
        </tr>
    </table>

</body>

</html>