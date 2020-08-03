<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>GET</title>
</head>
<body>
    <h2>ピザオーダー</h2>
    <form action="print.php" method="get">
        <label>ピザの種類：</label>
        <select name="type">
            <option value="0">マルゲリータ</option>
            <option value="1">シーフード</option>
            <option value="2">照り焼きチキン</option>
        </select><br>

        <label>サイズ：</label>
        <input type="radio" name="size" value="0">SS
        <input type="radio" name="size" value="1">S
        <input type="radio" name="size" value="2" checked>M
        <input type="radio" name="size" value="3">L<br>

        <label>チーズタイプ：</label>
        <input type="radio" name="ti-zutype" value="0" checked>あっさり
        <input type="radio" name="ti-zutype" value="1">深くコクあり<br>


        <label>追加トッピング</label>
        <input type="checkbox" name="arch[]"value="0">オニオン +200円
        <input type="checkbox" name="arch[]"value="1">ブロッコリー +200円
        <input type="checkbox" name="arch[]"value="2">サラミ +300円
        <input type="checkbox" name="arch[]"value="3">エビ +400円<br><br>


        <input type="submit" value="送信">
    </form>

</body>
</html>