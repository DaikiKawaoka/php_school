<?php
require_once 'DbManager.php';

class MyValidator {
  private $_errors;

  public function __construct(string $encoding = 'UTF-8') {
    $_errors = [];
    mb_internal_encoding($encoding);
    $this->checkEncoding($_GET);
    $this->checkEncoding($_POST);
    $this->checkEncoding($_COOKIE);
    $this->checkNull($_GET);
    $this->checkNull($_POST);
    $this->checkNull($_COOKIE);
  }

  private function checkEncoding(array $data) {
    foreach($data as $key => $value) {
      if (!mb_check_encoding($value)) {
        $this->_errors[] = "{$key}は不正な文字コードです。";
      }
    }
  }

  private function checkNull(array $data) {
    foreach($data as $key => $value) {
      if (preg_match('/\0/', $value)) {
        $this->_errors[] = "{$key}は不正な文字を含んでいます。";
      }
    }
  }

  public function requiredCheck(string $value, string $name) {
    if (trim($value) === '') {
      $this->_errors[] = "{$name}は必須入力です。";
    }
  }

  public function lengthCheck(string $value, string $name, int $len) {
    if (trim($value) !== '') {
      if (mb_strlen($value) > $len) {
        $this->_errors[] = "{$name}は{$len}文字以内で入力してください。";
      }
    }
  }

  public function intTypeCheck(string $value, string $name) {
    if (trim($value) !== '') {
      if (!ctype_digit($value)) {
        $this->_errors[] = "{$name}は数値で指定してください。";
      }
    }
  }

  public function rangeCheck(string $value, string $name, float $max, float $min) {
    if (trim($value) !== '') {
      if ($value > $max || $value < $min) {
        $this->_errors[] = "{$name}は{$min}～{$max}で指定してください。";
      }
    }
  }

  public function dateTypeCheck(string $value, string $name) {
    if (trim($value) !== '') {
      $res = preg_split('|([/\-])|', $value);
      if (count($res) !== 3 || !@checkdate($res[1], $res[2], $res[0])) {
        $this->_errors[] = "{$name}は日付形式で入力してください。";
      }
    }
  }

  public function regexCheck(string $value, string $name, string $pattern) {
    if (trim($value) !== '') {
      if (!preg_match($pattern, $value)) {
        $this->_errors[] = "{$name}は正しい形式で入力してください。";
      }
    }
  }

  public function inArrayCheck(string $value, string $name, array $opts) {
    if (trim($value) !== '') {
      if (!in_array($value, $opts)) {
        $tmp = implode(',', $opts);
        $this->_errors[] = "{$name}は{$tmp}の中から選択してください。";
      }
    }
  }

  public function duplicateCheck(string $value, string $name, string $sql) {
    try {
      $db = getDb();
      $stt = $db->prepare($sql);
      $stt->bindValue(':value', $value);
      $stt->execute();
      if (($row = $stt->fetch()) !== false) {
        $this->_errors[] = "{$name}は重複しています。";
      }
    } catch(PDOException $e) {
      $this->_errors[] = $e->getMessage();
    }
  }

  public function __invoke() {
    if (count($this->_errors) > 0) {
      print '<ul style="color:Red">';
      foreach ($this->_errors as $err) {
        print "<li>{$err}</li>";
      }
      print '</ul>';
      die();
    }
  }
}