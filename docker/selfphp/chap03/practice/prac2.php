<?php
$a = 1;
$b = &$a;
$a++;
echo $a;
echo '<br />';
echo $b;
