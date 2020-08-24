<?php
class Person {
  public $firstName;
  public $lastName;

  public function __construct ($firstName, $lastName) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
  }

  public function show() {
    print "<p>ボクの名前は{$this->lastName}{$this->firstName}です。</p>";
  }

  public function __toString() {
    return $this->lastName.$this->firstName;
  }
}
