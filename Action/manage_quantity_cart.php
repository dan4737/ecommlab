<?php

require('../Settings/core.php');
require('../Controllers/cart_controller.php');
// return array of all rows, or false (if it failed)
$cart = select_quantity_controller($_GET["id"]);

foreach($cart as $x)

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css' integrity='sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2' crossorigin='anonymous'>
    <script src='https://kit.fontawesome.com/75618b9696.js' crossorigin='anonymous'></script>

    <link rel='stylesheet' href='./extras/style.css'>


    <style>

.center{
    margin-left: 30%;
    margin-top: 20%;
    padding-bottom:20px
    
}

.form{
   
    width: 50%
}

.btn{
    margin-top: 10px;
    padding: 1%;
    border-radius: 10px;
    border: none;
}


#myform {
    text-align: center;
    padding: 5px;
    border: 1px dotted #ccc;
    margin: 2%;
}
.qty {
    width: 40px;
    height: 25px;
    text-align: center;
}
input.qtyplus { width:25px; height:25px;}
input.qtyminus { width:25px; height:25px;}

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

<div class="center">

        <form method="post" action="./add_to_cart.php" class="quantity">
                <div class="form-group">
                    <label for="exampleInputEmail1">Enter New Quantity</label>
                    <input type='button' value='-' class='qtyminus minus' field='quantity' />
                    <input type='text' name='quantity' value='<?php echo $x["qty"]   ?>' class='qty' />
                    <input type='button' value='+' class='qtyplus plus' field='quantity' />
                    <input style="padding-top:15px; padding-buttom:15px; display:none" type="number" name="id" min="1" value="<?php echo $_GET['id'] ?>" class="form" required>

                </div>
                
                <button type="submit" name="managecart" class="btn btn-primary">Update Quantity</button>
        </form>

</div>
        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
       jQuery(document).ready(($) => {
        $('.quantity').on('click', '.plus', function(e) {
            let $input = $(this).prev('input.qty');
            let val = parseInt($input.val());
            $input.val( val+1 ).change();
        });
 
        $('.quantity').on('click', '.minus', 
            function(e) {
            let $input = $(this).next('input.qty');
            var val = parseInt($input.val());
            if (val > 0) {
                $input.val( val-1 ).change();
            } 
        });
    });
    </script>
    
</body>
</html>