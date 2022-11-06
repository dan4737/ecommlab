<?php

require('../Controllers/product_controller.php');

$products = select_one_product_controller($_GET['id']);
$brand = select_one_brands_controller($products["product_brand"]);
$category = select_one_category_controller($products["product_cat"]);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i|Nunito:300,300i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i|Nunito:300,300i" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/style.css">
    <!-- <link rel="stylesheet" href="../css/product-page.css">
    <link rel="shortcut icon" type="image/png" href="../img/header-1.jpg"> -->

    <!-- Font Awsome CDN -->
    <script src="https://kit.fontawesome.com/75618b9696.js" crossorigin="anonymous"></script>

    <!-- slick slider cdn -->
    <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">

    <title>Hallel inc</title>
</head>
<body>

<!-- Product review section -->

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

<?php

echo "

<div class='review'>
    <div class='review__image'>
        <img src='{$products['product_image']}' alt='book-cover'>
    </div>
    <div class='review__info'>
        <div class='review__description'>
            <h4>Product Brand</h4>
            <p>{$brand['brand_name']}</p>
        </div>
        <div class='review__description'>
            <h4>Product Category</h4>
            <p>{$category['cat_name']}</p>
        </div>
        <div class='review__heading'>
            <h2>{$products['product_title']}</h2>
        </div>
        <div class='review__price'>
            <h2>GHC {$products['product_price']}</h2>
        </div>
        <div class='review__description'>
            <p>{$products['product_desc']}</p>
        </div>
        <div class='review__description'>
            <h4>Product Keywords</h4>
            <p>{$products['product_keywords']}</p>
        </div>
          
    </div>
</div>



";


?>

  
    

    
    <script   src="https://code.jquery.com/jquery-3.6.0.min.js"   integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="   crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/second.js"></script>
    <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>

   


</body>
</html>