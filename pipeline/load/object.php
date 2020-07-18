<?php
/**
 *
 */
class Ying
{

  function __construct()
  {

  }
  public function index()
  {
      echo '你好我是index方法 , 是在ying类中的';
  }
  public function test()
  {
      echo '你好我是点点';
  }
  public function test2()
  {
      echo '你好我是点点';
  }
}

$object = 'Ying';
$ying = new $object();
// $ying = new Ying();

$strings = ['index', 'test', 'test2'];

foreach ($strings as $key => $value) {
    echo "\n";
    $ying->{$value}();
}

// $ying->{$string}();
