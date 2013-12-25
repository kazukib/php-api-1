<?php

require './controllers/items_controller.php';

/* echo "PATH_INFO: " . $_SERVER['PATH_INFO'] . "<br/>"; */

switch ($_SERVER['PATH_INFO']) {
  case '/api/v1/items':
    $controller = new ItemsController();
    $controller->index($_GET);
    break;
  
  case '/api/v1/item':
    $controller = new ItemsController();
    $controller->show($_GET);
    break;
  
  default:
    break;
}
