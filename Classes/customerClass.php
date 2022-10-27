<?php
//connect to database class
require("../Settings/db_class.php");

/**
*General class to handle all functions 
*/
/**
 *@author David Sampah
 *
 */

class customer_class extends db_connection
{
	//--INSERT--//
	function addCustomerCls($customer_name, $customer_email ,$customer_pass ,$customer_country ,$customer_city,
	$customer_contact,$customer_image ,$user_role){
		$sql= "INSERT INTO `customer`( `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_image`, `user_role`) VALUES ('$customer_name','$customer_email','$customer_pass','$customer_country','$customer_city','$customer_contact','$customer_image','$user_role')";
		return $this->db_query($sql);
	}

	// --SELECT--//
	function registerOneCustomer($customer_id){
		$sql= "SELECT * FROM `customer` WHERE `customer_id` = '$customer_id' ";
		return $this->db_fetch_all($sql);
	}

	// --SELECT--//
	function selectemail($customer_email){
		$sql= "SELECT * FROM `customer` WHERE `customer_email` = '$customer_email' ";
		return $this->db_fetch_one($sql);
	}

}

	


?>