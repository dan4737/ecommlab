
<?php
include('../Controllers/email.php');

//updating data

$customer_email = $_POST["customer_email"];
$customer_password2 = $_POST["customer_pass"];


if(isset($_POST['login'])){
  
        if(emailctr($customer_email)!=false){
            $check=emailctr($customer_email);
            $customer_password2 = $check["customer_pass"];
            if (password_verify($customer_password2,$customer_pass)){
                session_start();
      $_SESSION['customer_id'] = $result['customer_id'];
      $_SESSION['custmer_name'] = $result['customer_name'];
      $_SESSION['customer_email'] = $result['customer_email'];
      header('Location:../view/index.php');
      
    }
    else{
      session_start();
      $_SESSION['error'] = 'Invalid login details!';    
      header('Location:../Login/login.php');
    }  
  }
  else{
    session_start();
    $_SESSION['error'] = 'Invalid login details!';    
    header('Location:../Login/login.php');
  }  
}


else {
  
  header('Location:../Login/login.php');

            }
       



        ?>
?>