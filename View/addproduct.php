<?php
require('../Controllers/product_controller.php');

$product = list_brands_controller();
$category = list_category_controller();
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css' integrity='sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2' crossorigin='anonymous'>
    <script src='https://kit.fontawesome.com/75618b9696.js' crossorigin='anonymous'></script>

    <style>
        .block{
            padding: 0 20%;
            margin: 10% 0;
        }
    </style>


   
</head>
<body>

<nav class='navbar navbar-expand-lg navbar-light bg-light '>
		<img src='./images/F1-Logo.png' width='6' height='60' alt='' loading='lazy'>
		<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNavAltMarkup' aria-controls='navbarNavAltMarkup' aria-expanded='false' aria-label='Toggle navigation'>
		<span class='navbar-toggler-icon'></span>
		</button>
		<div class='collapse navbar-collapse' id='navbarNavAltMarkup'>
				<a class='nav-link active' href='../index.php'>Return to Home</a>
			</div>
		</div>
	</nav>

<div class="block">
    <h3>Add Product</h3>
    <form method="post" action="../Action/add_product.php" id="product_form" enctype="multipart/form-data">

        <div class="form-group">
            <label for="exampleFormControlSelect1">Product Category</label>
            <select name="category" class="form-control" id="exampleFormControlSelect1">
              <option value="">Please Select Category</option>
              <?php

              foreach($category as $cat){
                echo "
                <option value={$cat['cat_id']}>{$cat['cat_name']}</option>;
                ";
              }

              ?>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Product Brand</label>
            <select name="brand" class="form-control" id="exampleFormControlSelect1">
              <option value="">Please Select Brand</option>
              <?php

              foreach($product as $prod){
                echo "
                <option value={$prod['brand_id']}>{$prod['brand_name']}</option>;
                ";
              }

              ?>
            </select>
          </div>


        <div class="form-group">
          <label for="exampleInputEmail1">Product Title</label>
          <input name="title" type="text" class="form-control" id="exampleInputEmail1"  placeholder="Name">
          <div id='name_error' class="val_error"></div>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Price</label>
          <input name="price" type="number" class="form-control" id="exampleInputPassword1" placeholder="100">
          <div id='price_error' class="val_error"></div>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <input name="description" type="text" class="form-control" id="exampleInputPassword1" placeholder="description">
          </div>

            <div class="form-group" style="display: flex; margin-top: 25px">
                <label for="exampleFormControlFile1">Image</label>
                <input type="file" name="image">
            </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Keyword</label>
            <input name="keyword" type="text" class="form-control" id="exampleInputPassword1" placeholder="keyword">
          </div>

        <button type="submit" name="addproduct" onclick='return check()'class="btn btn-primary">Submit</button>

</div>
      </form>
    
  
    <script src="../Js/main.js"></script>
</body>

</html>




