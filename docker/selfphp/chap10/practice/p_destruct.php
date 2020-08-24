<?php
class MySample {
  public function __destruct(){
    print '破棄されました。';
  }
}

$p = new MySample();