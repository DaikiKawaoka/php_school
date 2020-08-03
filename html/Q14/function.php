<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <?php
    function printRow(string $na, int $num, float $price,int $tax)
    {
        static $x;
        $sum = $num * $price * (100 + $tax) / 100;
        $x+=$sum;
        print "<td>{$na}</td><td>{$num}</td><td>{$price}</td><td>{$sum}</td><td>{$x}</td>";
    }
    ?>
</body>

</html>