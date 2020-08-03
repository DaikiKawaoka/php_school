<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <?php
    static $avg;
    $array;

    function printDate(string $fileName)
    {
        printHeader($fileName);
        $file=fopen($fileName,"r");
        flock($file,LOCK_SH);
        while ($line= fgetcsv($file)){
            foreach($line as $a){
                $array = explode("@",$a);
                printRow($array);
            }
        }
        flock($file,LOCK_UN);
        fclose($file);

    }

    function printHeader(string $fileName){
        print "<p>{$fileName}</p>";
        print '<table border="1">';
        print "<tr><th>氏名</th><th>Java</th><th>DB</th><th>Html</th><th>平均</th><th></th></tr>";
    }

    function printRow($array){
        $avg = ($array[1]+$array[2]+$array[3])/3;
        print '<tr>';
        print "<th>{$array[0]}</th><th>{$array[1]}</th><th>{$array[2]}</th><th>{$array[3]}</th><th>{$avg}</th>";
        print '</tr>';
    }

    function printFooter(){
        print '</table><br>';
    }

    ?>
</body>

</html>