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
$i = 0;
$j = 0;
$a = 0;
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
            foreach ($ary as $ary1){
                if($ary1[2]*$ary1[3]==0){
                }else{
                    print "<tr>";
                    foreach($ary1 as $ary2){
                        if($i==2){
                            $a=$ary2;
                        }
                        if($i==3){
                            print "<td>".$ary2."</td>";
                            print "<td>".$a*$ary2."</td>";
                            $sum+=$a*$ary2;
                        }else{
                            print "<td>".$ary2."</td>";
                            $i++;
                        }
                    }
                    $i=0;
                    print "</tr>";
                }
            }
            print '<tr><th colspan="4">合計</th>';
            print "<td>".$sum."</td></tr>";
        ?>
    </tr>
</table>

</body>
</html>