<?php 
class MyParent {
  public function hoge() {
    print 'MyParent!!';
  }
}

trait MyTrait {
  public function hoge() {
    print 'MyTrait!!';
  }
}

class MyChild extends MyParent {
  use MyTrait;
  
  public function hoge() {
    print 'MyChild!!';
  }
}

$cls = new MyChild();
$cls->hoge();