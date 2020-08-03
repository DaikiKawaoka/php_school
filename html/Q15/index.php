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
    $fileName="data1.txt";
    $fileName2="data2.txt";
    printDate($fileName);
    printDate($fileName2);
    ?>
</body>

</html>