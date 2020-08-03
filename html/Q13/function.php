<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php
//支払金額計算関数getPayment
function getPayment(int $num,int $price,float $tax): int{
  $sum = $num * $price * (100 + $tax) / 100;
  return $sum;
}
//支払金額表示関数getReicept
function getReicept(String $name,int $num,int $price,int $sum){
  print("{$name},{$num}個,{$price}円,合計{$sum}円");
}
?>
  </body>
</html>
