<?php
require_once 'BusinessPerson.php';

class EliteBusinessPerson extends BusinessPerson {
  public function work() {
    print "<p>{$this->lastName}{$this->firstName}はバリバリ働いています。</p>";
  }
}