<?php
require_once('database.php');

$fullname = $email = $address = "";

if (isset($_POST['fullname'])) {
    $fullname = $_POST['fullname'];
}

if (isset($_POST['email'])) {
    $email = $_POST['email'];
}

if (isset($_POST['address'])) {
    $address = $_POST['address'];
}

if ($fullname != '' && $email != '' && $address != '') {
    $sql = "INSERT INTO students(fullname, email, address) VALUES('$fullname','$email','$address')";
    execute($sql);
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sinh Viên</title>


    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container mt-30">

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">THÊM SINH VIÊN</h3>
            </div>
            <div class="panel-body">
                <form action="" method="POST" role="form">
                    <div class="form-group">
                        <label for="fullname">Fullname:</label>
                        <input type="text" class="form-control" id="fullname" name="fullname">
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>

                    <button type="submit" class="btn btn-success">Thêm</button>
                </form>


            </div>
        </div>

    </div>

    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>

</html>