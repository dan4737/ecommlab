<?php

require('../Classes/cart_class.php');


// BRAND

function select_single_cart_item_controller($id){

    $cart_instance = new Cart();
    
    return $cart_instance->select_single_cart_item($id);

}


function add_to_cart($id,$ip_address,$customerid,$qty){

    $cart_instance = new Cart();
    
    return $cart_instance->add($id,$ip_address,$customerid,$qty);

}

function add_to_cart_no_cid($id,$ip_address,$qty){
    $cart_instance = new Cart();
    
    return $cart_instance->add_no_cid($id,$ip_address,$qty);
}

function list_all_cart_controller($cid, $ip){

    $cart_instance = new Cart();
    
    return $cart_instance->select_all($cid, $ip);

}

// function list_all_cart_controller_ip($ip){
//     $cart_instance = new Cart();
    
//     return $cart_instance->list_all_with_ip($ip);
// }


function select_quantity_controller($id){

    $cart_instance = new Cart();
    
    return $cart_instance->select_qty($id);

}

function remove_from_cart($id, $ip_address){
    $cart_instance = new Cart();
    
    return $cart_instance->remove($id, $ip_address);
}

function update_cart_category($id, $ip_address, $qty){
    $cart_instance = new Cart();
    
    return $cart_instance->update_quantity($id, $ip_address, $qty);
}

function check_total($id, $ip){

    $cart_instance = new Cart();
    
    return $cart_instance->check($id, $ip);
}

// function check_total_ip($ip){

//     $cart_instance = new Cart();
    
//     return $cart_instance->check_ip($ip);
// }

function select_one_customer_controller($id){
    // create an instance of the Product class
    $product_instance = new Cart();
    // call the method from the class
    return $product_instance->select_one_customer($id);

}


// orders

function add_to_orders($customer_id, $invoice_number, $date, $status){

     $product_instance = new Cart();

     return $product_instance -> add_order($customer_id, $invoice_number, $date, $status);
}


function get_order_info($id){

    $product_instance = new Cart();

     return $product_instance -> get_order($id);

}


// Payment

function add_payment_controller($customer_id, $order_id, $amount, $currency, $paymentdate){
    $product_instance = new Cart();

    return $product_instance -> make_payment($customer_id, $order_id, $amount, $currency, $paymentdate);
}

function get_product_info($id){

    $product_instance = new Cart();

    return $product_instance -> get_product($id);

}




function delete_from_cart_page($customer_id){
    $product_instance = new Cart();

    return $product_instance -> delete_cart($customer_id);
}


function select_from_cart_controller($customer_id, $ip ){

    $cart_instance = new Cart();
    
    return $cart_instance->select_cart($customer_id, $ip);

}


// order details
function add_order_details_controller($order_id,  $pid, $qty){
    $cart_instance = new Cart();
    
    return $cart_instance->add_order_details($order_id,  $pid, $qty);
}


function select_order_info($result){

    $cart_instance = new Cart();
    
    return $cart_instance->select_order($result);
}


function remove_from_cart_controller($customer_id, $ip){

    $cart_instance = new Cart();
    
    return $cart_instance->remove_from_cart_class($customer_id, $ip);
}



?>
