<?php
   require ('../Classes/customerClass.php');

   function emailctr($customer_email){
    $emailunique = new customer_class();

    return $emailunique -> selectemail($customer_email);
   }



   ?>