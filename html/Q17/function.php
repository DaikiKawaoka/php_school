<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <?php
    
    function checkData(int $kijun, ...$array): array
    {
        $sum=0;
        $avg=0;
        $num=0;
        foreach($array as $ary){
            if($kijun <= $ary){
                $num++;
            }
            $sum+=$ary;
        }
        $avg = $sum/count($array);
        return[max($array),min($array),round($avg,2),$num];
    }
    ?>
</body>

</html>