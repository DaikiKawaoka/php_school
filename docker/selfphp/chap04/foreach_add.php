<pre>
<?php
$data = ['高江', '掛谷', '日尾', '薄井', '和田'];
foreach($data as &$value) {
  var_dump($value);
  if ($value === '和田') { $data[] = '鈴木'; }
}
