<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
if(isset($_POST['checkout_btn'])){
    $firstName = $_POST['first_name']; 
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phone_number'];
    $shippingAddress = $_POST['shipping_address'];
    $_SESSION['first_name'] = $firstName;
    $_SESSION['last_name'] = $lastName;
    $_SESSION['email'] = $email;
    $_SESSION['phone_number'] = $phoneNumber;
    $_SESSION['shipping_address'] = $shippingAddress;

       

}
 ?>

<body>
    <form class="" method='POST' action='test_session.php'>
        <label class="label" for="">First Name</label>
        <input value="
        <?php   if($_SESSION['first_name'] == $firstName){
            
            echo $_SESSION['first_name'];
        }else{

        }

        ?>
        "  name="first_name" class="form-control form-control disabling_btn" type="text" />
        <label class="label" for="">Last Name</label>
        <input value="
        <?php

         echo $_SESSION['last_name'];
         ?>
         "  name="last_name" class="form-control form-control disabling_btn_js" type="text" />
        <label class="label" for="">Email</label>
        <input value="
        <?php
         echo $_SESSION['email'];
         ?>
         "  name="email" class="form-control form-control disabling_btn_js" type="text" />
        <label class="label" for="">Phone Number</label>
        <input value="
        <?php
         echo $_SESSION['phone_number']
         ;?>
         "  name="phone_number" class="form-control form-control disabling_btn_js" type="text" />
        <label class="label" for="">Shipping Address</label>
        <input value="
        <?php
         echo $_SESSION['shipping_address'];
         ?>
         "  name="shipping_address" class="form-control form-control pre_btn_mgn" type="text" />
        <input class="" name="checkout_btn" id="checkout_btn" type="submit" value="Checkout" />
    </form>
</body>

</html>
<?php
// if(null !== $_SESSION['test'] && ! empty($_SESSION['test'])){
//         echo $_SESSION['test'].'</br>';
// }elseif(null !== $_SESSION['error-message'] && ! empty($_SESSION['error-message'])){
//     echo $_SESSION['error-message'];
// }
?>