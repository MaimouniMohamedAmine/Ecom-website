<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <link rel="stylesheet" href="style-sign-up.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Register</title>
</head>

<body>
    <?php include 'Navbar.php'?>
    <div class="container">
        <h3 id="h3">Create Account</h3>
        <form class="register_form"method="post" action="">
            <label for="">First Name</label>
            <input class="form-control form-control" type="text">
            <label for="">Last Name</label>
            <input class="form-control form-control " type="text">
            <label for="">Address</label>
            <input class="form-control form-control"  type="text">
            <label for="">Phone Number</label>
            <input class="form-control form-control" type="text">
            <label for="">Email</label>
            <input class="form-control form-control" type="text">
            <label for="">Password</label>
            <input class="form-control form-control " type="password">
            <input id="Register_btn" type="button" value="Register">
        </form>
    </div>
    <?php include 'footer.php'?>

</body>

</html>