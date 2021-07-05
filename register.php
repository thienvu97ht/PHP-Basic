<?php
function register()
{
    if (!empty($_POST)) {
        $fullname = $_POST["fullname"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];

        var_dump($fullname);

        // Lưu vào database
        // Tạo kết nối đến database
        require_once("sql_connect.php");

        // Thực hiện truy vấn dữ liệu - insert data vào database
        $query = "INSERT INTO STUDENT(FULL_NAME, USER_NAME, PASSWORD, EMAIL, PHONE_NUMBER) 
        VALUES ('$fullname','$username','$password','$email','$phone')";
        mysqli_query($connect, $query);

        // Đóng kết nối
        require_once("sql_close.php");

        header("Location: bai5.php");
    }
}
