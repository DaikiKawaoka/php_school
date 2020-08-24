<?php
interface IFax {
  function send();
}

interface IPrinter {
  function print();
}

trait FaxTrait {
  public function send() {
    print 'sending Fax...sended!';
  }
}

trait PrinterTrait {
  public function print() {
    print 'printing...completed!';
  }
}

class FaxPrinter implements IFax, IPrinter {
  use FaxTrait, PrinterTrait;
}

$fp = new FaxPrinter();
$fp->send();
print '<br />';
$fp->print();
