<?php
require_once(dirname(__FILE__) . "/./../models/item.php");
require_once(dirname(__FILE__) . "/./../controllers/request.php");

class Itemsxml{
       public function __construct(){
	       header("Content-Type: application/xml; charset=utf-8");
	        $is_order = new Request();
   $is_order_r = $is_order->getPathInfo();
   	if(strstr($is_order_r, 'price_desc')){
	   $filter = 'price_desc';
	}else if(strstr($is_order_r, 'price_asc')){
	   $filter = 'price_asc';
	}else if(strstr($is_order_r, 'id_desc')){
            $filter = 'id_desc';	
	}else if(preg_match('/[0-9]+/', $is_order_r)){
	    preg_match('/[0-9]+/', $is_order_r, $match);
	    $filter = "$match[0]";
        }else{	    
        $filter = 'a';
	}

        $xml_r = Item::getdata($filter);
    	$xmlstr = "<?xml version=\"1.0\" ?><root></root>";
        $xml = new SimpleXMLElement($xmlstr);
        foreach($xml_r as $arr){
            $xmlitem = $xml -> addChild("item");
            foreach($arr as $key => $value){
                $xmlitem -> addChild($key, $value);
            }
        }
	print $xml -> asXML();
  }
}
