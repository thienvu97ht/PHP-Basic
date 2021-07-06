<?php

$hoten = $emailAddress = $ngaysinh = $matkhau = $xacminhmatkhau = $diachi = "";
$isPwdMapping = true;
if (!empty($_POST)) {
    if (isset($_POST['fullname'])) {
        $hoten = $_POST['fullname'];
    }

    if (isset($_POST['email'])) {
        $emailAddress = $_POST['email'];
    }

    if (isset($_POST['birthday'])) {
        $ngaysinh = $_POST['birthday'];
    }

    if (isset($_POST['password'])) {
        $matkhau = $_POST['password'];
    }

    if (isset($_POST['confirmation_password'])) {
        $xacminhmatkhau = $_POST['confirmation_password'];
    }

    if (isset($_POST['address'])) {
        $diachi = $_POST['address'];
    }

    if ($matkhau == $xacminhmatkhau) {
        header("Location: welcome.php?ten=" . $hoten);
        die();
    } else {
        $isPwdMapping = false;
    }
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
                <h3 class="panel-title text-center">THÊM SINH VIÊN</h3>
            </div>
            <div class="panel-body">
                <form action="" method="POST" role="form">
                    <div class="form-group">
                        <label for="usr">Name:</label>
                        <input type="text" class="form-control" id="usr" name="fullname" required="true"
                            value="<?= $hoten ?>">
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required="true"
                            value="<?= $emailAddress ?>">
                    </div>

                    <div class="form-group">
                        <label for="birthday">Birthday:</label>
                        <input type="date" class="form-control" id="birthday" name="birthday" required="true"
                            value="<?= $ngaysinh ?>">
                    </div>

                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required="true">
                        <?= $isPwdMapping ? "" :
                            '<div class="text-danger mt-5">
                                Mật khẩu không khớp
                            </div>' ?>
                    </div>

                    <div class="form-group">
                        <label for="confirmation-password">Confirmation Password:</label>
                        <input type="password" class="form-control" id="confirmation-password"
                            name="confirmation_password" required="true">
                    </div>

                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" id="address" name="address" required="true"
                            value="<?= $diachi ?>">
                    </div>

                    <button type="submit" class="btn btn-success">Register</button>
                </form>


            </div>
        </div>

    </div>

    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>

</html>