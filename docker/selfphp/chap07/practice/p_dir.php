<?php
$dir = new DirectoryIterator('./');
foreach ($dir as $file) {
  if ($file->isFile()) {
    print mb_convert_encoding($file->getFileName(), 'UTF-8', 'SJIS-WIN'). '<br />';
  }
}
