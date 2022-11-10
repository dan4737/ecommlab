<?php

require('../Settings/connection.php');

// inherit the methods from Connection
class Cart extends Connection{


	function select_single_cart_item($id){
		
		return $this->fetchOne("select * from cart where p_id='$id'");
	}

    function add($id,$ip_address,$customerid,$qty){

        return $this->query("insert into cart(p_id, ip_add, c_id, qty) values('$id', '$ip_address', '$customerid', '$qty')");
    }

    function select_all($cid){

        return $this->fetch("select * from cart inner join products on  p_id = product_id where c_id = '$cid' ");
    }


}

?>