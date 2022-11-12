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

    function add_no_cid($id,$ip_address,$qty){
        return $this->query("insert into cart(p_id, ip_add, qty) values('$id', '$ip_address', '$qty')");

    }

    function select_all($cid, $ip){

        return $this->fetch("select * from cart inner join products on  p_id = product_id where c_id = '$cid' or ip_add = '$ip' ");
    }

    // function list_all_with_ip($ip){
    //     return $this->fetch("select * from cart inner join products on  p_id = product_id where ip_add = '$ip' ");
    // }

    function select_qty($id){

        return $this->fetch("select * from cart where p_id='$id'");

    }

    function remove($id, $ip_address){
        return $this->query("Delete from cart where p_id = '$id' and ip_add = '$ip_address' ");

    }

    function update_quantity($id, $ip_address, $qty){

        return $this->query("update cart set qty='$qty' where p_id = '$id' and ip_add = '$ip_address' ");

    }

    function check($id,$ip){
        return $this->fetch("select SUM(qty * product_price) as total from cart inner join products on  p_id = product_id where c_id = '$id' or ip_add = '$ip'");
    }

    // function check_ip($ip){
    //     return $this->fetch("select SUM(qty * product_price) as total from cart inner join products on  p_id = product_id where ip_add = '$ip'");
    // }

    function select_one_customer($id){
		// return associative array or false
		return $this->fetchOne("select * from customer where customer_id='$id'");
	}


    // orders


    function add_order($customer_id, $invoice_number, $date, $status){

        return $this->getlast("insert into orders (customer_id, invoice_no, order_date, order_status) values('$customer_id', '$invoice_number', '$date', '$status')");

    }


    // function get_order($id){

    //     return $this->getlast("select * from orders where customer_id = '$id'");


    // }


    // Payment
    function make_payment($customer_id, $order_id, $amount, $currency, $paymentdate){

        return $this->query("insert into payment (amt, customer_id, order_id, currency, payment_date) values ('$amount',  '$customer_id', '$order_id', '$currency', '$paymentdate' )  ");
        
    }


    function delete_cart($customer_id){
        return $this->query("delete from cart where c_id = '$customer_id' ");


    }

    function select_cart($customer_id, $ip){
        return $this->fetch("select * from cart where c_id ='$customer_id' or ip_add = '$ip' ");
    }


    function add_order_details($order_id,  $pid, $qty){

        return $this->query("insert into orderdetails (order_id, product_id, qty) values ('$order_id',  '$pid', '$qty')  ");

    }


    function select_order($result){
        return $this->fetch("select * from orders where order_id ='$result'");
    }


    function remove_from_cart_class($customer_id, $ip){
        return $this->query("delete from cart where c_id = '$customer_id' or ip_add = '$ip' ");
    }


}

?>