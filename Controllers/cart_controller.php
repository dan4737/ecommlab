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

function list_all_cart_controller($cid){

    $cart_instance = new Cart();
    
    return $cart_instance->select_all($cid);

}

?>
