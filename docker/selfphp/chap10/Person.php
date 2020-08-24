<?php
class Person {
  public $firstName;
  public $lastName;

  public function __construct (string $firstName, string $lastName) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
  }

  public function show() {
    print "<p>ボクの名前は{$this->lastName}{$this->firstName}です。</p>";
  }

  public function __toString() {
    return $this->lastName.$this->firstName;
  }

  public function __debugInfo() {
    return [
        '名' => $this->firstName,
        '性' => $this->lastName
    ];      
  }
}
