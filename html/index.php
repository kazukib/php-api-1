<?php

require '../app/controllers/items_controller.php';

//echo $_SERVER['REQUEST_URI'];

switch ($_SERVER['REQUEST_URI']) {
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
