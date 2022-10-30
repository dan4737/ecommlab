<?php

require('./Settings/core.php');

?>



<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Admin</title>

    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css' integrity='sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2' crossorigin='anonymous'>
    <script src='https://kit.fontawesome.com/75618b9696.js' crossorigin='anonymous'></script>

    <link rel='stylesheet' href='./extras/style.css'>
    
</head>
<body style='background-color: rgb(252, 252, 253);'>

    <nav class='navbar navbar-expand-lg navbar-light bg-light '>
        <img src='./images/F1-Logo.png' width='6' height='60' alt='' loading='lazy'>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNavAltMarkup' aria-controls='navbarNavAltMarkup' aria-expanded='false' aria-label='Toggle navigation'>
        <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarNavAltMarkup'>
        <div class='navbar-nav ml-auto'>
            <a class='nav-link active' href='./Login/login.php'>Login</a>
            <a class='nav-link active' href='./Login/register.html'>Sign up</a>

            <?php
            if(isset($_SESSION['user_role']) ){
                if($_SESSION['user_role'] === "1"){
                    echo "<a class='nav-link active' href='./Admin/Brand.php'>Brand</a>";
                    echo "<a class='nav-link active' href='./Admin/Category.php'>Categories</a>";
                }
            }else{
                echo "";
            }

            ?>
        <a class='nav-link active' href='./Login/logout.php'>Logout</a>

        </div>
        </div>
    </nav>
