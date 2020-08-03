<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>POST</title>
</head>
<body>
    <h2>領収証</h2>
    <?php
        $name = $_POST["name"];
        $num = $_POST["num"];
        $nedan = $_POST["nedan"];
        $syoukei = $num * $nedan;
        $tax = round($syoukei*0.1);
        $intax = $syoukei+$tax;

        print "購入商品：{$name}<br>";
        print "単価： {$nedan}円<br>";
        print "数量： {$num}個<br>";
        print "小計： {$syoukei}円<br>";
        print "消費税額： {$tax}円<br>";
        print "購入商品： {$intax}円<br>";
    ?>
    

    <a href="index.php">トップページに戻る</a>
</body>
</html>