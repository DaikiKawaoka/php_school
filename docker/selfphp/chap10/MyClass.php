<?php
class MyClass {
  public $pub = 'public';
  protected $pro = 'protected';
  private $pri = 'private';

  public function showProperty() {
    foreach ($this as $key => $value) {
      print "{$key}：{$value} <br />";
    }
  }
}