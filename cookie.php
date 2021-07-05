<?php
session_start();
// var_dump($_SESSION);

require_once("register.php");

// var_dump($_COOKIE);
// setcookie("fullname", "", 0, "./");
// setcookie("username", "", 0, "./");
// setcookie("password", "", 0, "./");
// setcookie("email", "", 0, "./");
// setcookie("phone", "", 0, "./");

register();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">


</head>

<body>
    <div class="container">
        <form action="" method="POST">
            <div class="form-group">
                <label for="fullname">Full Name:</label>
                <input type="text" class="form-control" id="fullname" name="fullname">
            </div>

            <div class="form-group">
                <label for="username">User Name:</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>

            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" name="password">
            </div>

            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>

            <button type="submit" class="btn btn-success">Register</button>
        </form>
    </div>

    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>

</html>