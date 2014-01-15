<?php

require_once(dirname(__FILE__) . "/./../controllers/request.php");
require_once(dirname(__FILE__) . "/./../views/items.json.php");
require_once(dirname(__FILE__) . "/./../views/items.xml.php");

class Itemscontroller{
    public function __construct(){
	$path = new Request();
	$path_r = $path->getPathInfo();
	if(strstr($path_r, 'xml')){
	    $format = new Itemsxml();
	}else{
	    $format = new Itemsjson();
        }
	return $format;
    }
}
