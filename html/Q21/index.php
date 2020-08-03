<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>POST</title>
</head>
<body>
    <h2>お買上げ金額計算</h2>
    <form method="post" action="calc.php">
        <label>商品名：</label>
        <input type="text" name="name"><br>
        <label>単価：</label>
        <input type="text" name="nedan">円<br>
        <label>数量：</label>
        <input type="text" name="num">個<br>
        <input type="submit" value="計算">
    </form>
</body>
</html>