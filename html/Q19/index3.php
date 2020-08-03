<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>匿名関数</title>
    <style type="text/css">
    </style>
</head>

<body>
    <?php
    //匿名関数１（足し算関数）を変数に格納
	{
        $calcProc = function($a,$b,callable $get,callable $pringt){
            $pringt($get($a,$b));
        };
        $getTotal = function($a,$b){return $a+$b;};
    };
    //匿名関数２（メッセージ表示関数）を変数に格納
	{
        $printMessage = function($mes){ print "合計は{$mes}です。"; };
    };
    //計算処理関数を呼び出し（匿名関数）
    $calcProc(10,20,$getTotal,$printMessage);

    ?>
</body>

</html>