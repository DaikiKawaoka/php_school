<!DOCTYPE html>
<html>

<head>
  <title></title>
</head>

<body>
    <?php
        session_start();
        $_SESSION['siharai']=$_POST["siharai"];
    ?>
  <h2>購入内容の確認</h2>
  <?php
    print "<table><tr><th><a href='adr.php'>発送先情報の入力</a>＞</th><td><a href='pay.php'>支払方法の選択</a>＞</td><td>内容の確認＞</td><td>購入の確定</td></tr></table>"
  ?>

  <form action="thx.php" method="post">
  <table>
    <tr>
      <th>購入商品</th>
      <td></td> 
    </tr>
    <tr>
    <tr>
      <td>商品名</td>      
      <td>：<?=($_SESSION['item_name'])?></td>
    </tr>
    <tr>
      <td>価　格</td>      
      <td>：<?=($_SESSION['item_price'])?>円</td>
    </tr>
    <tr> 
      <th>発送先</th><td></td>
      </tr>
      <td>氏　名</td>
      <td>： <?=($_SESSION['user_name'])?></td>
    </tr>
    <tr> 
      <td>住　所</td>
      <td>：<?=($_SESSION['user_adr'])?></td>
    </tr>
    <tr> 
      <th>支払方法</th><td></td>
    </tr>
    <tr> 
      <td></td>
      <td>：<?=($_SESSION['siharai'])?></td>
    </tr>    
  
  </table>
  <br>
  <input type="submit" value="購入の確定">
</form>
</body>
</html>