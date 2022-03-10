<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <link rel="stylesheet" href="style-sign-in.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Authentication</title>
</head>

<body>
    <?php include 'Navbar.php'?>
    <div class="container">
        <h5 id="h5">Good to see you again!</h5>
        <h3 id="h3">Sign In</h3>
        <form method="post" action="">
            <input class="form-control form-control email" placeholder=" Email Address" type="text">
            <input class="form-control form-control password" placeholder=" Password" type="text">
            <input id="Sign_In_btn" type="button" value="Sign In">
        </form>
        <p id="p">Don't have an account?</p>
        <a id="a" href="">Create Account</a>
    </div>
    <?php include 'footer.php'?>

</body>

</html>