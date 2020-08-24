<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>チェックボックス</title>
</head>
<body>
<form method="POST" action="check2.php">
あなたがよく使用するサーバサイド技術は？<br />
<input id="php" type="checkbox" name="arch" value="PHP" />
<label for="php">PHP</label>
<input id="jsp" type="checkbox" name="arch" value="JSP＆サーブレット" />
<label for="jsp">JSP＆サーブレット</label>
<input id="asp" type="checkbox" name="arch" value="ASP.NET" />
<label for="asp">ASP.NET</label>
<input type="submit" value="送信" />
</form>
</body>
</html>