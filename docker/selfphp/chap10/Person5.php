<?php
class Person {
  public $firstName;
  public $lastName;

  public function __construct($firstName, $lastName) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
  }

  public function __destruct () {
    print '<p>'.__CLASS__.'オブジェクトが破棄されました。</p>';
  }

  public function show() {
  // private function show() {
    print "<p>ボクの名前は{$this->lastName}{$this->firstName}です。</p>";
  }
}
