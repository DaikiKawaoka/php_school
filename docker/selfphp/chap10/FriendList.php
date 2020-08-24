<?php
class FriendList implements IteratorAggregate {
  public $version = '1.0.0';
  public $name = '友人リスト';
  private $list = [];

  public function getIterator(): Traversable {
    return new ArrayIterator($this->list);
  }

   public function add(Person $p) {
    $this->list[] = $p;
  }

/*
  public function __clone() {
    foreach ($this->list as &$value) {
      $value = clone $value;
    }
  }
*/

  public function __invoke($index) {
    return $this->list[$index];
  }
}