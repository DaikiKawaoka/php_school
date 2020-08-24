<?php 
interface Runnable {
  function run();
}

class MyClass {
  public function execute(Runnable $rc) {
    print 'start...';
    $rc->run();
    print 'end...';
  }
}

$cls = new MyClass();
$cls->execute(new class implements Runnable {
  public function run() {
    print 'process...';
  } 
});
