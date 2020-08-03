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
$aaa;
$file=fopen("birds.txt","rb");
flock($file,LOCK_SH);
// while ($line= fgetcsv($file,1024,"\t")){
// print '<tr>';
// foreach ($line as $value){
//     $aaa=explode(" ",$value);
//     foreach($aaa as $a){
//     print "<td>".$a."</td>";
//     }
// }
// print '</tr>';
// }
while ($line= fgetcsv($file,1024," ")){
    print '<tr>';
    foreach ($line as $value){
        print "<td>".$value."</td>";
    }
    print '</tr>';
    }
flock($file,LOCK_UN);
fclose($file);
?>
</table>
</body>
</html>