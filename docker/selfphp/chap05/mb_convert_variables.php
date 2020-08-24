<?php
$data = ['和田', '杉山', '杉沼', '長田', '星山'];
mb_convert_variables('EUC-JP', 'UTF-8, SJIS, JIS', $data);
print_r($data);