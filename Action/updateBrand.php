<?php

require('../Controllers/product_controller.php');
// return array of all rows, or false (if it failed)
$product = select_one_brands_controller($_GET['id']);

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

		<form method="post" action="./brandprocess.php">
			<div class="form-group">
				<input class="form-control" type="text" placeholder="Product Name" name="name" value="<?php echo $product['brand_name'] ?>">
			</div>		

            <div class="form-group" style="display: none;">
				<input class="form-control" type="number" placeholder="Quantity" name="id" value="<?php echo $product['brand_id'] ?>">
			</div>

			<input type="submit" name="updateProductID">

		</form>
	</div>
	
</body>
</html>