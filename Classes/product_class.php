<?php

require('../Settings/connection.php');

// inherit the methods from Connection
class Product extends Connection{


	function add_brand($name){
		// return true or false
		return $this->query("insert into brands(brand_name) values('$name')");
	}

    function select_all_brands(){
		// return array or false
		return $this->fetch("select * from brands");
	}

    function select_one_brand($id){
		// return associative array or false
		return $this->fetchOne("select * from brands where brand_id='$id'");
	}

	function select_brand_name($name){
		return $this->fetchOne("select * from brands where brand_name='$name'");
	}

    function update_one_brand($id, $name){
		// return true or false
		return $this->query("update brands set brand_name='$name' where brand_id = '$id'");
	}


	// CATEGORIES

	function add_categories($name){
		// return true or false
		return $this->query("insert into categories(cat_name) values('$name')");
	}

	function select_category_name($name){
		return $this->fetchOne("select * from categories where cat_name='$name'");
	}

	function select_all_categories(){
		// return array or false
		return $this->fetch("select * from categories");
	}

	function select_one_category($id){
		// return associative array or false
		return $this->fetchOne("select * from categories where cat_id='$id'");
	}

	function update_one_category($id, $name){
		// return true or false
		return $this->query("update categories set cat_name='$name' where cat_id = '$id'");
	}
}