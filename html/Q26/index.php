<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>
<body>
    <?php
    require_once "included.php";
    session_start();
    ?>
    <h2>購入商品選択</h2>
    <form action="adr.php" method="post">
        <table>
            <tr>
                <th>商品名</th>
                <th>価格</th>
                <th></th>
            </tr>
            <tr>
                <td><?php print "{$goods[0][0]}"?></td>
                <td><?php print "{$goods[0][1]}"?>円</td>
                <td><input type="radio" checked="checked" name="item" value="0" /></td>
            </tr>
            <td><?php print "{$goods[1][0]}"?></td>
            <td><?php print "{$goods[1][1]}"?>円</td>
            <td><input type="radio" name="item" value="1" /></td>
            </tr>
            <td><?php print "{$goods[2][0]}"?></td>
            <td><?php print "{$goods[2][1]}"?>円</td>
            <td><input type="radio" name="item" value="2" /></td>
            </tr>
        </table>
        <br>
        <input type="submit" value="購入手続き">
    </form>
</body>

</html>