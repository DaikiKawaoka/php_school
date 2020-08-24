<?php
abstract class Figure {
  protected $width;
  protected $height;
  public function __construct($width, $height) {
    $this->width = $width;
    $this->height = $height;
  }
  protected abstract function getArea();
}

class Triangle extends Figure {
  public final function getArea() {
    return $this->width * $this->height / 2;
  }
}

class Square extends Figure {
  public final function getArea(){
    return $this->width * $this->height;
  }
}
$tri = new Triangle(10, 5);
$sqr = new Square(10, 5);
print "三角形の面積は{$tri->getArea()}です。<br />";
print "四角形の面積は{$sqr->getArea()}です。";