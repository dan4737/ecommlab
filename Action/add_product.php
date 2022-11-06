<?php

require('../Controllers/product_controller.php');

// check if theres a POST variable with the name 'addProductButton'
 if(isset($_POST['addproduct'])){
    
    $category = $_POST['category'];
    $brand = $_POST['brand'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $keyword = $_POST['keyword'];

    // uploading process

    $file = $_FILES["image"];
    $fileName = $_FILES['image']['name'];
    $fileTmpName = $_FILES['image']['tmp_name'];
    $fileSize = $_FILES['image']['size'];
    $fileError = $_FILES['image']['error'];
    $fileType = $_FILES['image']['type'];

    $fileExt = explode(".", $fileName);
    $fileActualExt = strtolower(end($fileExt));

    // enforcing file compatibility
    $allowed = array("jpg","jpeg","png","pdf");

    // checking the file type
    if(in_array($fileActualExt, $allowed)){
        // checking if theres an error in uploading file
        if($fileError === 0){
            // checking to see if the filesize if good
            if($fileSize < 5000000){
                // creates microseconds based on our current time in microseconds. so that the random number is not the same as something we have already uploaded
                $fileNameNew = uniqid('',true).".".$fileActualExt;

                // Directing the file to the destination in our code we want it
                $fileDestination = '../Images/product/'.$fileNameNew;

                // moving file to the categories section of images
                $move = move_uploaded_file($fileTmpName, $fileDestination);
                // Tell us that our upload has been successful;
                // header("location: ../Admin/Category.php?uploadsuccess");
            }else{
                echo "Your file is too big";
            }
        }else{
            echo "You cannot upload this type of files";
        }
    }else{
        echo "You cannot upload file of this type";
    }


    $check = check_product_exists($title);

    if($check['product_title'] != $title){

        $result = add_product_controller($category,$brand,$title,$price,$description,$fileDestination,$keyword);

        if($result === true){
            header("Location: ../index.php");
        }else{
            header("Location: ../Error/error.html");
        }

    }
    
}

if(isset($_POST['updateProduct'])){
    
    $category = $_POST['category'];
    $brand = $_POST['brand'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $keyword = $_POST['keyword'];
    $id = $_POST['id'];


    $result = update_product_controller($category,$brand,$title,$price,$description,$keyword, $id);

    if($result === true){
        header("Location: ../index.php");
    }else{
        header("Location: ../Error/error.html");
    }

}

?>