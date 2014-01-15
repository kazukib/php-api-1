<?php
class Item
{
    /**
    * 実行メソッド
    * @param   string  $order ソートするかどうか
    * @return  string  
    * @author  KazukiBaba
    */

    public function getdata($order){
	   
        $dsn = 'mysql:dbname=items;host=127.0.0.1';
        $user = 'root';
        $password = 'root';

        try{
            $dbh = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
        }

        try{    
            if (preg_match('/[0-9]+/', $order)){
	        $sql = "SELECT id,price FROM item_info where id = $order";
	    }else{
	        switch ($order){
	        case 'price_desc':
	            $sql ="SELECT id,price FROM item_info ORDER BY price DESC";
		    break;
                case 'price_asc':
		    $sql ="SELECT id,price FROM item_info ORDER BY price";
		    break;
                case 'id_desc':
		    $sql ="SELECT id,price FROM item_info ORDER BY id DESC";
		    break;
                default:
		    $sql ="SELECT id,price FROM item_info ORDER BY id";
		    break;
	        }
           }  
        $result = array();	
        foreach ($dbh->query($sql) as $row) {
            $result[] = array('id' => $row['id'], 'price' => $row['price']);
	}
        }catch (PDOException $e){
        print('Error:'.$e->getMessage());
        die();
        }
        return $result;
    }
}
       	
