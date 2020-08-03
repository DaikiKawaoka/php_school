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
        print_r (sortDate("A",10,70,30,90,50));
        print_r (sortDate("D",20,60,40,80));
        print "<br>";
        print_r (sortDate("X",200,400,100));
    ?>
</body>

</html>