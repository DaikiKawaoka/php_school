<?php
class MyClass {
  protected $data;
  public function __construct(string $data) {
    $this->data = $data;
  }
  public function getData(): string {
    return $this->data;
  }
}
