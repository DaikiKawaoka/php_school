<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <?php

    function sortDate(string $mozi, ...$array): array
    {
        if ("A" === $mozi) {
            sort($array, SORT_NUMERIC);
            print "<h3>昇順に整列</h3><br>";
        } elseif ("D" === $mozi) {
            rsort($array, SORT_NUMERIC);
            print "<br><h3>降順に整列</h3><br>";
        } else {
            print "<br>";
            print "parameter error!!!={$mozi}<br>";
        }
        return $array;
    }
    ?>
</body>

</html>