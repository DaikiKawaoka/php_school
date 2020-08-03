<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <?php
        if(isset($_POST['user_name']) && isset($_POST["user_adr"])){
            session_start();
            $_SESSION['user_name']=$_POST["user_name"];
            $_SESSION["user_adr"]=$_POST["user_adr"];
        }
    ?>

    <h2>支払方法の選択</h2>

    <?php
        print "<table><tr><th><a href='adr.php'>発送先情報の入力</a>＞</th><td>支払方法の選択＞</td><td>内容の確認＞</td><td>購入の確定</td></tr></table>"
    ?>

    <form action="confirm.php" method="post">
        <table>
            <tr>
                <td>代引き</td>
                <td><input type="radio" name="siharai" value="代引き" checked="checked"/></td>
            </tr>
            <td>銀行振込</td>
            <?php if($_SESSION['siharai']=="銀行振込"){?>
                <td><input type="radio" name="siharai" value="銀行振込" checked="checked" /></td>
            <?php }else{?>
                <td><input type="radio" name="siharai" value="銀行振込" /></td>
            <?php }?>
            </tr>
            <td>コンビニ払い</td>
            <?php if($_SESSION['siharai']=="コンビニ払い"){?>
                <td><input type="radio" name="siharai" value="コンビニ払い" checked="chacked" /></td>
            <?php }else{?>
                <td><input type="radio" name="siharai" value="コンビニ払い" /></td>
            <?php }?>
            </tr>
        </table>
        <br>
        <input type="submit" value="内容の確認へ">
    </form>
</body>

</html>