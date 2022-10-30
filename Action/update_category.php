<?php

require('../Settings/core.php');
require('../Controllers/product_controller.php');
// return array of all rows, or false (if it failed)
$cateogies = select_all_categories_controller();

if(isset($_SESSION['user_role']) && isset($_SESSION['user_id'])){
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand</title>

    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/register.css">

    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css' integrity='sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2' crossorigin='anonymous'>
    <script src='https://kit.fontawesome.com/75618b9696.js' crossorigin='anonymous'></script>

    <link rel='stylesheet' href='./extras/style.css'>

    <style>
        .form{
            margin-top:150px;
            display:flex;
	        justify-content: center;
            align-items:center;
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


<table class="table">
        <thead>
            <tr>
                <th>Name</th>
				<th></th>
				<th></th>
            </tr>
        </thead>

        <tbody>
			<?php
			foreach($cateogies as $x){
				echo 
				"
				<tr>
					<td>{$x['cat_name']}</td>
					<td><a href='updateCategory.php?id={$x['cat_id']}'>Update</a></td>
				</tr>
				";
			}

			?>

		
        </tbody>



    </table>
   
    
</body>
</html>


<?php

        }else{
            header("Location: ../Login/login.php");
        }


?>