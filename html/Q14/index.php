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
    $na;        //商品名
    $pr;       //単価
    $nu;     //個数
    $tx = 10;        //消費税率(%)
    ?>
    <table border="1">
        <tr>
            <th>商品名</th>
            <th>数量</th>
            <th>単価</th>
            <th>金額</th>
            <th>累計</th>
        </tr>
        <tr>
            <?php
            printRow("雑誌", 3, 1480, $tx);
            ?>
        </tr>
        <tr>
            <?php
            printRow("ジュース", 2, 100, $tx);
            ?>
        </tr>
        <tr>
            <?php
            printRow("弁当", 1, 480, $tx);
            ?>
        </tr>
    </table>
</body>

</html>