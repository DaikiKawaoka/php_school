<table border="1">
<?php
for ($i = 1; $i < 10; $i++) {
  print '<tr>';
  for ($j = 1; $j < 10; $j++) {
    print '<td>' . ($i * $j) . '</td>';
  }
  print '</tr>';
}
?>
</table>