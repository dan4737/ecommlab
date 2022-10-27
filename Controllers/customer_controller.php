<?php

require('../Classes/customerClass.php');

function addCustomerCtr($customer_name,$customer_email,$customer_pass,$customer_country,
$customer_city,$customer_contact,$customer_image,$user_role){

    // echo $email;
    // create an instance of the Product class
    $customer = new customer_class();
    // call the method from the class
    return $customer->addCustomerCls($customer_name, $customer_email ,$customer_pass ,$customer_country ,$customer_city,
	$customer_contact,$customer_image ,$user_role);
header('Location:../Login/login.php');

}





?>