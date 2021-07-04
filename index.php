<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

</head>

<body>
    <div class="container-fluid">
        <form method="POST" action="">
            <div class="form-group">
                <label for="fullname">FullName:</label>
                <input type="text" class="form-control" id="fullname" name="fullname">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address">
            </div>
            <button type="submit" class="btn btn-success">Register</button>
        </form>
    </div>

    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>

</html>

<?php
if (isset($_REQUEST['fullname'])) {
    $fullname = $_REQUEST['fullname'];
    $address = $_REQUEST['address'];
    $email = $_REQUEST['email'];

    echo "Fullname: " . $fullname . '</br>';
    echo "Email: " . $email . '</br>';
    echo "Address: " . $address . '</br>';

    if ($fullname == 'thienvu97ht') {
        header("Location: welcome.php");
    };
};
?>