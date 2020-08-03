<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>可変関数</title>
    <style type="text/css">
    </style>
</head>
<?php
//計算に使う数字
$data = [[10, 4], [9, 2], [12, 5]];
//表示用演算子
$symbol = ['', '+', '-', '*', '/'];
?>

<body>
    <?php
    require_once "function.php";
    $funcName="";
    foreach($data as $ary){
        print "▶n1 : {$ary[0]} , n2 : {$ary[1]}<br>";
        for($i = 1;$i < count($symbol); $i++){
            // if($i===1){
            //     $funcName="calc1";
            // }elseif($i===2){
            //     $funcName="calc2";
            // }elseif($i===3){
            //     $funcName="calc3";
            // }else{
            //     $funcName="calc4";
            // }
            switch ($i) {
                case 1:
                    $funcName="calc1";
                    break;
                case 2:
                    $funcName="calc2";
                    break;
                case 3:
                    $funcName="calc3";
                    break;
                case 4:
                    $funcName="calc4";
            }
            print "{$ary[0]}{$symbol[$i]}{$ary[1]}=".number_format($funcName($ary[0],$ary[1]),1);
            print "<br>";
            }
            $i=0;
        }
    ?>
</body>

</html>