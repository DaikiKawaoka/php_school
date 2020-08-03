<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>レンタル処理</title>
  <style type="text/css">
    table,  td,  th {
      border-collapse: collapse;
      border: 1px solid black;
    }
  </style>
</head>
<?php
//メディア
$mediaName = ['DVD/Bluray', 'CDアルバム'];
//タイプ
$mediaType = ['新作', '旧作'];
//レンタル日数（新作）
$rentalDays = ['当日', '1泊2日', '2泊3日', '7泊8日'];
//レンタル日数（旧作，DVD/Bluray）
$rentalDaysDVD = ['7泊8日', '7泊8日', '7泊8日', '7泊8日'];
//レンタル日数（旧作，CD）
$rentalDaysCD = ['当日', '7泊8日', '7泊8日', '7泊8日'];
//レンタル料金表
$pay = [
  [340, 390, 440, 440],
  [100, 100, 100, 100],
  [260, 310, 360, 360],
  [260, 310, 310, 310]
]
?>
<body>
  <h2>レンタル料金</H2>
  <?php
    $media = $mediaName[$_POST["media"]];
    $works =$mediaType[$_POST["works"]];
    $date = $rentalDays[$_POST["date"]];
    $pays;
    $now = new DateTime();
    $date2 = $now -> format('Y年m月d日');
    $now2 = new DateTime();

    if($media == 'DVD/Bluray'){

      if($works == '新作'){
        $date = $rentalDays[$_POST["date"]];
        $pays = $pay[0][$_POST["date"]];
        switch($_POST["date"]){
          case 0:
              $now2 -> add(new DateInterval('P0D'));
            break;
          case 1:
              $now2 -> add(new DateInterval('P1D'));
            break;
          case 2:
            $now2 -> add(new DateInterval('P2D'));
            break;
          case 3:
            $now2 -> add(new DateInterval('P7D'));
            break;
        }
      }else{
        $date = $rentalDaysDVD[$_POST["date"]];
        $pays = $pay[1][$_POST["date"]];
        $now2 -> add(new DateInterval('P7D'));
      }

    }else{

      if($works == '新作'){
        $date = $rentalDays[$_POST["date"]];
        $pays = $pay[2][$_POST["date"]];

        switch($date){
          case 0:
              $now2 -> add(new DateInterval('P0D'));
            break;
          case 1:
              $now2 -> add(new DateInterval('P1D'));
            break;
          case 2:
            $now2 -> add(new DateInterval('P2D'));
            break;
          case 3:
            $now2 -> add(new DateInterval('P7D'));
            break;
        }

      }else{
        $date = $rentalDaysCD[$_POST["date"]];
        $pays = $pay[3][$_POST["date"]];
        if($_POST["date"] == 0){
          $now2 -> add(new DateInterval('P0D'));
        }else{
          $now2 -> add(new DateInterval('P7D'));
        }
      }
    }

    $date3 = $now2-> format('Y年m月d日');

    print "<table>";
    print "<tr><th>レンタル品目：</th><td>${media} ${works} ${date}</td></tr>";
    print "<tr><th>貸出日：</th><td>${date2}</td></tr>";
    print "<tr><th>返却日：</th><td>${date3}</td></tr>";
    print "<tr><th>料金：</th><td>${pays}円</td></tr>";
    print "</table>";

  ?>
  <br />
  <a href="index.php">トップページへ</a>
</body>

</html>