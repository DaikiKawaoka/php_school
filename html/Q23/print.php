<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>GET</title>
</head>
<?php
$pizza_price = [
    [480, 630, 580],
    [900, 1200, 1100],
    [1500, 2200, 2000],
    [2700, 3300, 3100]
];
$topping_price = [200, 200, 300, 400];
$p_ary = ['マルゲリータ', 'シーフード', 'てりやきチキン'];
$s_ary = ['SS', 'S', 'M', 'L'];
$c_ary = ['あっさり', '深くコクあり'];
$t_ary = ['オニオン', 'ブロッコリー', 'サラミ', 'エビ'];
$pay = 0;
?>

<body>
    <h2>注文内容</h2>
    <?php
    $price= $pizza_price[$_GET["size"]] [$_GET["type"]];
    print "ピザの種類：{$p_ary[$_GET["type"]]}<br>";
    print "サイズ：{$s_ary[$_GET["size"]]}<br>";
    print "チーズタイプ：{$c_ary[$_GET["ti-zutype"]]}<br>";
    print "トッピング：";
    if (isset($_GET["arch"])) {
        foreach ($_GET["arch"] as $ary) {
            print "{$t_ary[$ary]},";
            $price+=$topping_price[$ary];
        }
    }else{
        print "-";
    }
    print "<br>料金：{$price}";
    ?>
</body>

</html>