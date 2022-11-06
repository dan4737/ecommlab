<?php

require('../Controllers/product_controller.php');
// return array of all rows, or false (if it failed)
$products = select_one_product_controller($_GET['id']);

$product = list_brands_controller();
$category = list_category_controller();


// var_dump($products);
// return;
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	
	<title>Products</title>
	<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css' integrity='sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2' crossorigin='anonymous'>
    <script src='https://kit.fontawesome.com/75618b9696.js' crossorigin='anonymous'></script>

    <link rel='stylesheet' href='./extras/style.css'>
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

	<h1>Update Product</h1>

	<div class="container">

		<form method="post" action="../Action/add_product.php" id="validateupdate">

            <div class="form-group">
                <label for="exampleFormControlSelect1">Product Category</label>
                <select name="category" class="form-control" id="exampleFormControlSelect1">
                <option value="">Please Select Category</option>

                <!-- <option value="audi" selected>Audi</option> -->
                <?php

                foreach($category as $cat){

                    if($cat['cat_id'] == $products["product_cat"]){
                        echo "
                        <option  value={$cat['cat_id']} selected>{$cat['cat_name']}</option>;
                        ";
                    }else{
                        echo "
                        <option value={$cat['cat_id']}>{$cat['cat_name']}</option>;
                        ";
                    }
                    
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

                    if($prod['brand_id'] == $products['product_brand']){
                        echo "
                        <option value={$prod['brand_id']} selected>{$prod['brand_name']}</option>;
                        ";
                    }else{
                        echo "
                        <option value={$prod['brand_id']}>{$prod['brand_name']}</option>;
                        ";
                    }
                    
                }

                ?>
                </select>
            </div>
            
            <div class="form-group">
				<input class="form-control" type="text" placeholder="Product Name" id="title" name="title" value="<?php echo $products['product_title'] ?>" required>
                <div id='title_error' class="val_error"></div>
			</div>		
            
            <div class="form-group">
				<input class="form-control" type="text" placeholder="Product Name" id="price"  name="price" value="<?php echo $products['product_price'] ?>" required>
                <div id='price_error' class="val_error"></div>

			</div>		

            <div class="form-group">
				<input class="form-control" type="text" placeholder="Product Name" id="description"  name="description" value="<?php echo $products['product_desc'] ?>" required>
                <div id="desc_error" class="val_error"></div>
			</div>		

            <!-- <div class="form-group">
				<input class="form-control" type="text" placeholder="Product Name" name="name" value="<?php echo $products['product_image'] ?>" >
			</div>		 -->

            <div class="form-group">
				<input class="form-control" type="text" placeholder="keyword" id="keyword"  name="keyword" value="<?php echo $products['product_keywords'] ?>" required>
                <div id='keyword_error' class="val_error"></div>
			</div>

            <div class="form-group" style="display: none;">
				<input class="form-control" type="number" placeholder="Quantity" name="id" value="<?php echo $products['product_id'] ?>">
			</div>

			<button type="submit" name="updateProduct" onclick="return see()"> Update </button>

		</form>
	</div>


    <script src="../Js/main.js"></script>
	
</body>
</html>