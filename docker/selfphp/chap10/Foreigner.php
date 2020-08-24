<?php
require_once 'Person.php';

class Foreigner extends Person {
  public $middleName;

  public function __construct(string $firstName, string $middleName, string $lastName) {
    parent::__construct($firstName, $lastName);
    $this->middleName = $middleName;
  }

  public function show() {
    print "<p>ボクの名前は{$this->firstName}.{$this->middleName}.{$this->lastName}です。</p>";
  }
}