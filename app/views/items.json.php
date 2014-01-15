<?php
require_once(dirname(__FILE__) . "/./../models/item.php");
require_once(dirname(__FILE__) . "/./../controllers/request.php");
class Itemsjson{    
    public function __construct(){
    header("Content-Type: application/json; charset=utf-8");
    $is_order = new Request();
    $is_order_r = $is_order->getPathInfo();
        if(strstr($is_order_r, 'price_desc')){
    $filter = 'price_desc';
	}else if(strstr($is_order_r, 'price_asc')){
	    $filter = 'price_asc';
	}else if(strstr($is_order_r, 'id_desc')){
	    $filter = 'id_desc';	
	}else{
        $filter = '';
	}
    $json_r = Item::getdata($filter);    
    echo json_encode($json_r,JSON_UNESCAPED_UNICODE);
    }
}
