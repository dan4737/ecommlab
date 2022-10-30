<?php

require('../Controllers/product_controller.php');

// check if theres a POST variable with the name 'addProductButton'
 if(isset($_POST['addButton'])){
    // retrieve the name, description and quantity from the form submission
    $name = $_POST['name'];

    // call the add_product_controller function: return true or false
   
    // var_dump($result);
    // return;
    $check = select_single_category_controller($name);

    if($check["cat_name"] != $name){
        $result = add_category_controller($name);

        if($result === true) header("Location: ../Admin/Category.php");
        else header("Location: ../Error/error.html");
    }else{
        header("Location: ../Action/Add_category.php?error=Category Already Exists in System"); 
        return;
    }

}

if(isset($_POST["updateProductID"])){

    $id = $_POST['id'];
    $name = $_POST['name'];


    // Call the function
    $results = update_category_controller($id, $name);
    if($results === true) header("Location: ../Admin/Category.php");
    else header("Location: ../Error/error.html");
}





?>