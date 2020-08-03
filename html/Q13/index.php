<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>支払金額計算</title>
</head>
<?php
$na = '雑誌';        //商品名
$pr = 1480;       //単価
$nu = 3;     //個数
$tx = 10;        //消費税率(%)
?>
<body>
    <h1>支払金額計算</h1>
    <?php
      require_once "function.php";
      $sum = getPayment($nu,$pr,$tx);
      getReicept($na,$nu,$pr,$sum);
    ?>
</body>
</html>