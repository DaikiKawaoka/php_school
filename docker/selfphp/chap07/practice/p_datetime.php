<?php
$dt = DateTime::createFromFormat('Y年m月d日' ,'2016年12月04日');
print $dt->format('Y/m/d (D)');
