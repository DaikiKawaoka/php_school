<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <?php
    require_once "included.php";
    session_start();
    if($_POST['item']== 0){
        $_SESSION['item_name']=$goods[0][0];
        $_SESSION['item_price']=$goods[0][1];
    }elseif($_POST['item']== 1){
        $_SESSION['item_name']=$goods[1][0];
        $_SESSION['item_price']=$goods[1][1];
    }else{
        $_SESSION['item_name']=$goods[2][0];
        $_SESSION['item_price']=$goods[2][1];
    }
    ?>
    <h2>発送先情報入力</h2>
    <?php
        print "<table><tr><th>発送先情報の入力＞</th><td>支払方法の選択＞</td><td>内容の確認＞</td><td>購入の確定</td></tr></table>"
    ?>
    <form action="pay.php" method="post">
        <table>
            <tr>
                <td>氏　名：</td>
                <td><input type="text" name="user_name"  value="<?= $_SESSION['user_name']?>"></td>
            </tr>
            <td>住　所：</td>
            <td><input type="text" name="user_adr" value="<?= $_SESSION['user_adr']?>"></td>
            </tr>
        </table>
        <br>
        <input type="submit" value="支払方法の選択へ">
    </form>
</body>
</html>