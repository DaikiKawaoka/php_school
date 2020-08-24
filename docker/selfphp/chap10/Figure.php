<?php
class Figure {
// abstract class Figure {
  protected $width;
  protected $height;

  public function __construct(float $width, float $height) {
    $this->width = $width;
    $this->height = $height;
  }

  public function getArea(): float {
  //protected abstract function getArea(): float {
    return 0;
  }
}
