<?php
    $array = [["\\\\","バックスラッシュ（円記号）"],['\\',"ダブルクォート"]]
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>PHPの基本</title>
</head>
<body>
    <table border="1">
        <caption>主なエスケープシーケンス</caption>
        <tr>
            <th>エスケープシーケンス</th>
            <th>概要</th>
        </tr>
        <tr>
            <td><?= $array[0][0]?></td>
            <td><?= $array[0][1]?></td>
        </tr>
        <tr>
            <td><?= $array[1][0]?></td>
            <td><?= $array[1][1]?></td>
        </tr>
    </table>
</body>
</html>