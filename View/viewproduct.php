<?php
require('../Controllers/product_controller.php');

$product = list_products_controller();

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
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Product Name</th>
      </tr>
    </thead>
    <tbody>
    <?php
        foreach($product as $x){
          echo 
          "
          <tr>
            <th scope='row'>{$x['product_id']}</th>
            <td>{$x['product_title']}</td>
            <td><a href='updateproduct.php?id={$x['product_id']}'>Update Product</a></td>
          </tr>
          ";
        }

        ?>
      
    </tbody>
  </table>

    
      <script src="../Js/main.js"></script>
  </body>

</div>

</html>




