<?php

require './models/item.php';

class ItemsController {

  /**
   * GET /items
   *
   */
  public function index($params) {
    $action_name = 'index';
    /* echo "ItemsController#show is called<br/>"; */

    $item = new Item();
    $word = $item->hello();

    require './views/items/index.json.php';
  }

  /**
   * GET /items/#{id}
   *
   */
  public function show($params) {
    $action_name = 'show';
    /* echo "ItemsController#show is called<br/>"; */

    $item = new Item();
    $word = $item->hello();

    require './views/items/show.json.php';
  }
}
