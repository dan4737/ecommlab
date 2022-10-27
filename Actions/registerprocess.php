<?php

require('../Controllers/customer_controller.php');

//collecting form data

if(isset($_POST['register'])){
    $customer_name = $_POST["customer_name"];
    $customer_email = $_POST["customer_email"];
    //$customer_pass = password_hash($_POST["customer_pass"],PASSWORD_DEFAULT);
    $customer_pass1 = $_POST["customer_pass"];
    $customer_pass=password_hash($customer_pass1,PASSWORD_DEFAULT);
    $customer_country= $_POST["customer_country"];
    $customer_city= $_POST["customer_city"];
    $customer_contact = $_POST["customer_contact"];
    $user_role= 2;
   // $customer_image = NULL;

    // echo $customer_contact;
   $result= addCustomerCtr($customer_name,$customer_email,$customer_pass,$customer_country,
    $customer_city,$customer_contact,$customer_image,$user_role);
    

     if($result==TRUE){
     header("Location: ../Login/login.php");
    } else {
       echo "Data not inserted";
     }
}

?>