<?php
function register()
{
    if (!empty($_POST)) {
        $fullname = $_POST["fullname"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];

        echo $fullname;

        // Lưu vào database
        // Tạo kết nối đến database
        $connect = new mysqli("localhost", "root", "", "php_basic");

        // CHo phép PHP lưu unicode (utf8) - database
        mysqli_set_charset($connect, "utf8");

        // Kiểm tra kết nối có thành công
        if ($connect->connect_error) {
            var_dump($connect->connect_error);
            die();
            echo $connect;
        }

        // Thực hiện truy vấn dữ liệu - insert data vào database
        $query = "INSERT INTO STUDENT(FULL_NAME, USER_NAME, PASSWORD, EMAIL, PHONE_NUMBER) 
        VALUES (' $fullname',' $username',' $password',' $email',' $phone')";
        mysqli_query($connect, $query);

        // Đóng kết nối
        $connect->close();

        header("Location: bai5.php");
    }
}
