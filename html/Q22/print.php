<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>POST</title>
</head>

<body>
    <?php
        print "<h2>{$_POST['name']} 合格検定試験調査</h2><br>";
            $a = isset($_POST['arch1']);
        if($_POST["arch1"] != null){
            foreach($_POST['arch1'] as $arch){
                print "{$arch}<br>";
            }
        }
        if(isset($_POST['arch2'])){
            foreach($_POST['arch2'] as $arch){
                print "{$arch}<br>";
            }
        }
        if(isset($_POST['arch3'])){
            foreach($_POST['arch3'] as $arch){
                print "{$arch}<br>";
            }
        }
    ?>
    <br /><a href="index.html">トップページに戻る</a>
</body>

</html>