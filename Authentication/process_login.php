<?php
$registered_username = $registered_password = "";

if (isset($_GET['username'])) {
    $registered_username = $_GET['username'];
}

if (isset($_GET['password'])) {
    $registered_password = $_GET['password'];
}


// Lấy dữ liệu từ form login
$username = $password = "";
if (isset($_POST['username'])) {
    $username = $_POST['username'];
}

if (isset($_POST['password'])) {
    $password = $_POST['password'];
}

// Kiểm tra dữ liệu đăng ký  = login
if ($registered_username == $username && $registered_password == $password) {
    header("Location: welcome.php");
    die();
} else if ($username != "") {
    echo '<h1 style="color: red" class="text-center">Đăng nhập thất bại</h1>';
}
