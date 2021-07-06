<?php
require_once('process_register.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="./formStyle.css">

</head>

<body>
    <div class="container mt-25">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Nhập thông tin đăng ký</h3>
            </div>
            <div class="panel-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="fullname">Họ tên:</label>
                        <input type="text" class="form-control" id="fullname" name="fullname">
                    </div>

                    <div class="form-group">
                        <label for="username">Tên tài khoản:</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>

                    <div class="form-group">
                        <label for="pwd">Mật khẩu:</label>
                        <input type="password" class="form-control" id="pwd" name="password">
                    </div>

                    <button type="submit" class="btn btn-success">Đăng ký</button>
                </form>
            </div>
        </div>


    </div>

    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>

</html>