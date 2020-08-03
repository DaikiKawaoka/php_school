<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>リダイレクト</title>
</head>
<body>
<h2>リダイレクト</H2>
    <?php
    if(empty($_POST["name"]) or empty($_POST["add"])){
        header("Location: http://localhost/Q24/ng.php");
    }
        print "氏名：{$_POST["name"]}";
        print "氏名：{$_POST["add"]}";
    ?>
    <br />
    <a href="index.php">入力ページへ</a>
</body>

</html>