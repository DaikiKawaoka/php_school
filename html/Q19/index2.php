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
    //計算処理関数を呼び出し
    calcProc(10,20,"getTotal","printMessage");
    //計算処理関数（高階関数）
    {
        //関数１（足し算関数）を呼び出し
        function calcProc($a,$b,callable $get,callable $pringt){
            //足し算関数を呼び出し
            $pringt($get($a,$b));
        }

    }
    //足し算関数
    {
        function getTotal($a,$b){
            return $a+$b;
        }
    }
    //メッセージ表示関数
    {
        function printMessage($mes){
            print "合計は{$mes}です。";
        }
    }

    ?>
</body>

</html>