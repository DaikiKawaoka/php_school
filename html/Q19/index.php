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
    calcProc(10,20);

    //計算処理関数
    {
        function calcProc($a,$b){
            //足し算関数を呼び出し
            printMessage(getTotal($a,$b));
        }

        //メッセージ表示関数を呼び出し

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
            print $mes;
        }

    }
    ?>
</body>

</html>