<?php
require('../Settings/core.php');

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

    <form method="post" action="./categoryprocess.php" class="form">
            <label for="add" style="margin-right: 15px;">Category Name</label>
            <input type="text" name="name" id="category_name"  class="form-control" placeholder="Shoes, Clothes, Applicances ..." style="width:40%;">
            <div id='contact_error' class="val_error"></div>

            <button name="addButton" type="submit" class="btn btn-primary">Add Category</button>
    </form>
    <?php if (isset($_GET['error'])) { ?>
        <p style="margin-top:10px; margin-left:600px" class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
   
    
</body>
</html>

<?php

    }else{
        header("Location: ../Login/login.php");
    }

?>