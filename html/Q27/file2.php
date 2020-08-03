<?php
$ext = pathinfo($_FILES['upfile']['name']);
$perm = ['gif', 'jpg', 'jpeg', 'png'];

if ($_FILES['upfile']['error'] !== UPLOAD_ERR_OK) {
  $msg = [
    UPLOAD_ERR_INI_SIZE => 'php.iniのupload_max_filesize制限を越えています。',
    UPLOAD_ERR_FORM_SIZE => 'HTMLのMAX_FILE_SIZE 制限を越えています。',
    UPLOAD_ERR_PARTIAL => 'ファイルが一部しかアップロードされていません。',
    UPLOAD_ERR_NO_FILE => 'ファイルはアップロードされませんでした。',
    UPLOAD_ERR_NO_TMP_DIR => '一時保存フォルダが存在しません。',
    UPLOAD_ERR_CANT_WRITE => 'ディスクへの書き込みに失敗しました。',
    UPLOAD_ERR_EXTENSION => '拡張モジュールによってアップロードが中断されました。'
  ];
  $err_msg = $msg[$_FILES['upfile']['error']];
} elseif (!in_array(strtolower($ext['extension']), $perm)) {
  $err_msg = '画像以外のファイルはアップロードできません。';
} elseif (!@getimagesize($_FILES['upfile']['tmp_name'])) {
  $err_msg = 'ファイルの内容が画像ではありません。';
} else {
  $src = $_FILES['upfile']['tmp_name'];
  $dest = mb_convert_encoding($_FILES['upfile']['name'], 'SJIS-WIN', 'UTF-8');
  if (!move_uploaded_file($src, 'doc/' . $dest)) {
    $err_msg = 'アップロード処理に失敗しました。';
  }
}
if (isset($err_msg)) {
  die('<div style="color:Red;">' . $err_msg . '</div>');
}
$a = $_POST["comment"];
$comment = $_FILES['upfile']['name'];
$b = "{$a},{$comment},";
$file = fopen('dat.txt', 'w+');
flock($file, LOCK_EX);
fwrite($file, $b);
flock($file,LOCK_UN);
fclose($file);

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h2>アップロード画像</h2>
  <table border="1">
    <tr>
      <td>コメント</td>
      <td>画像</td>
    </tr>
    <?php
    $file = fopen('dat.txt', 'rb');
    $i=1;
  flock($file, LOCK_SH);
    while ($line = fgetcsv($file, 1024, ",")) {
      print '<tr>';
      foreach ($line as $value) {
        if($i % 2 ==1){
          print "<td>" . $value . "</td>";
          ++$i;
        }else{
          print "<td><img src=doc/". $value ."></td>";
          ++$i;
        }
      }
      print '</tr>';
    }
    fclose($file)
    ?>
  </table>
  <a href="index.php">アップロードページへ</a>
</body>

</html>