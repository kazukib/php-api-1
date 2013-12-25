<?php

require './controllers/items_controller.php';
require './models/item.php';
// require './views/items/index.json.php';
// require './views/items/index.xml.php';

/* echo "@TODO switch controller#action by url"; */

var_dump($_SERVER['PATH_INFO']);

/*
switch ($_SERVER['PATH_INFO']) {
  case '/items':
    $controller = new ItemsController();
    $response = $controller->index($_GET, $format);
    break;
  
  case '/item':
    $response = $api_server->getItemDetail($_GET, $format);
    break;
  
  default:
    //404 Not Found
    $response = $api_server->render404Response($format);
    break;
}
 */
