<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <table border="1">
    <?php
$title='Q10';
$h1='【ファイル書き込み】';
$p='phpのファイル書き込みによって作成されたhtmlファイル';
$img='photo1.jpg';
$array1=[];
$array2=[];
$aaa;
$file=fopen("birds.txt","rb");
flock($file,LOCK_SH);
while ($line= fgetcsv($file,1024,"\t")){
    foreach ($line as $value){
        $aaa=explode(" ",$value);
        array_push($array1,$aaa);
    }
    array_push($array2,$array1);
}

for($i=0;$i<count($array2);$i++){
    for($j=0;$j<count($array2);$j++){
        print $array1[$j][0];
    }
}
print count($array2);
// print "<table>";
// foreach($array as $a1){
//     print "<tr>";
//     print_r($a1);
//     foreach($a1 as $w){
//         print "<td>".$w."</td>";
//     }
//     print "</tr>";
// }
// print "</table>";
flock($file,LOCK_UN);
fclose($file);

?>
</table>
</body>
</html>