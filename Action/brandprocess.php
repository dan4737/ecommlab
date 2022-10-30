<?php

require('../Controllers/product_controller.php');

// check if theres a POST variable with the name 'addProductButton'
 if(isset($_POST['addButton'])){
    // retrieve the name, description and quantity from the form submission
    $name = $_POST['name'];

    // call the add_product_controller function: return true or false
    
   
    // var_dump($result);
    // return;
    $check = select_single_brand_controller($name);

    if($check["brand_name"] != $name){
        $result = add_brand_controller($name);

        if($result === true) header("Location: ../Admin/Brand.php");
        else header("Location: ../Error/error.html");
    }else{
        header("Location: ../Action/Add_brand.php?error=Brand Already Exists in System"); 
        return;
    }
    

    if($result === true) header("Location: ../Admin/Brand.php");
    else header("Location: ../Error/error.html");

}

if(isset($_POST["updateProductID"])){

    $id = $_POST['id'];
    $name = $_POST['name'];


    // Call the function
    $results = update_brand_controller($id, $name);
    if($results === true) header("Location: ../Admin/Brand.php");
    else header("Location: ../Error/error.html");
}





?>