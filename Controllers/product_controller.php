<?php

require('../Classes/product_class.php');

function add_brand_controller($name){

    // echo $email;
    // create an instance of the Product class
    $brand_instance = new Product();
    // call the method from the class
    return $brand_instance->add_brand($name);

}



function select_all_brands_controller(){
    // create an instance of the Product class
    $brand_instance = new Product();
    // call the method from the class
    return $brand_instance->select_all_brands();

}

function select_single_brand_controller($name){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance-> select_brand_name($name);

}

function select_one_brands_controller($id){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->select_one_brand($id);

}


function update_brand_controller($id, $name){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->update_one_brand($id, $name);

}

// CATEGORIES


function add_category_controller($name){

    // echo $email;
    // create an instance of the Product class
    $brand_instance = new Product();
    // call the method from the class
    return $brand_instance->add_categories($name);

}

function select_single_category_controller($name){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance-> select_category_name($name);

}

function select_all_categories_controller(){
    // create an instance of the Product class
    $brand_instance = new Product();
    // call the method from the class
    return $brand_instance->select_all_categories();

}

function select_one_category_controller($id){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->select_one_category($id);

}


function update_category_controller($id, $name){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->update_one_category($id, $name);

}

?>