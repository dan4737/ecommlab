<?php



require('../Controllers/cart_controller.php');
require('../Settings/core.php');
// check if theres a POST variable with the name 'addProductButton'



    if(isset($_POST['addtocart'])){

        if(isset($_SESSION['user_role'])){
   
        $id = $_POST['id'];
        $ip_address = getenv("REMOTE_ADDR");
        $customerid = $_SESSION['user_id'];
        $qty = 1;
        
    
        $check = select_single_cart_item_controller($id);
    
    
        if($check['p_id'] != $id){
    
            $result = add_to_cart($id,$ip_address,$customerid,$qty);
    
            if($result === true){
                header("Location: ../View/all_product.php?error=Product Added Successfully");
            }else{
    
                header("Location: ../Error/error.html");
    
            }
        }else{
            header("Location: ../View/all_product.php?error=Item already in Added to cart");
        }

    }else{
        header("Location: ../Login/login.php");
    }
}

 

    



    

    // call the add_product_controller function: return true or false
    
   
    // var_dump($result);
    // return;
    // $check = select_single_brand_controller($name);

    // if($check["brand_name"] != $name){
    //     $result = add_brand_controller($name);

    //     if($result === true) header("Location: ../Admin/Brand.php");
    //     else header("Location: ../Error/error.html");
    // }else{
    //     header("Location: ../Action/Add_brand.php?error=Brand Already Exists in System"); 
    //     return;
    // }
    

    // if($result === true) header("Location: ../Admin/Brand.php");
    // else header("Location: ../Error/error.html");



?>