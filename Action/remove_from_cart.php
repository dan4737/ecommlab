<?php
require('../Controllers/cart_controller.php');
require('../Settings/core.php');


    $id = $_GET['id'];
    $ip_address = getenv("REMOTE_ADDR");


    $result = remove_from_cart($id, $ip_address);

    if($result === true){
        header("Location: ../index.php?error=Item deleted Successfully");
    }else{

        header("Location: ../Error/error.html");

    }




?>



