<!DOCTYPE html>
<html>
<?php
$row = 5;
$col = 3;
?>

<head>
    <meta charset="UTF-8" />
    <title>九九表</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>九九表</h1>
    <table border="1">
        <?php
        for ($i = 1; $i <= $row; $i++) {
            print "<tr>";
            for ($j = 0; $j <= $col; $j++) {
                if ($j == 0) {
                    print "<th class='aa'>{$i}の段</th>";
                } else {
                    $s = $i * $j;
                    print "<th>{$s}</th>";
                }
            }
            print "</tr>";
        }
        ?>
    </table>
</body>

</html>