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

    function calcProc($a,$b,callable $get, callable $print){
        $print($get($a,$b));
    }

    {
        calcProc(10,20,function($a,$b){return $a+$b;},function($mes){ print "合計は{$mes}です。";});
    }
    ?>
</body>

</html>