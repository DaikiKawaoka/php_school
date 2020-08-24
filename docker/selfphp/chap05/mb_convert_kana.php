<?php
mb_internal_encoding('UTF-8');
$str = 'WINGSﾌﾟﾛｼﾞｪｸﾄ';
print mb_convert_kana($str, 'RKV');