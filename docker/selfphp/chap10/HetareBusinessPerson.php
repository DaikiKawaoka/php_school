<?php
require_once 'BusinessPerson.php';

class HetareBusinessPerson extends BusinessPerson {
  public function work () {
    parent::work();
    print 'ただし、ボチボチと…';
  }
}