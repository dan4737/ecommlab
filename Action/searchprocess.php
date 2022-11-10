<?php

if(isset($_POST['searchbutton'])){
    
    $search = $_POST['searchInput'];

    header("Location: ../View/product_search_result.php?search=$search");

}



?>