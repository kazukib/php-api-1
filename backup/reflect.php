<?php

class ApiServer {

  public function hello($params) {
    echo '---------------------------------------------------------------------';
    echo "hello!\n";
    var_dump($params);
  }

  public function world($params) {
    echo '---------------------------------------------------------------------';
    echo "world!\n";
    var_dump($params);
  }
}

$params = array(
  'a' => 1,
  'b' => '2',
);

$instance = new ApiServer();

$method = new ReflectionMethod('ApiServer', 'hello'); 
$method->invoke($instance, $params);

$method = new ReflectionMethod('ApiServer', 'world'); 
$method->invoke($instance, $params);
