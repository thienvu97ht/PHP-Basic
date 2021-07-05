<?php

function login()
{
    if (!empty($_POST)) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        echo $email . "<br/>" . $password . "<br/>";

        // Tạo kết nối đến database
        $connect = new mysqli("localhost", "root", "", "php_basic");

        // CHo phép PHP lưu unicode (utf8) - database
        mysqli_set_charset($connect, "utf8");

        // Kiểm tra kết nối có thành công
        if ($connect->connect_error) {
            var_dump($connect->connect_error);
            die();
        }

        // Thực hiện truy vấn dữ liệu - insert data vào database
        $query = "SELECT * FROM STUDENT WHERE EMAIL = '$email' AND PASSWORD = '$password' ";

        $result = mysqli_query($connect, $query);

        $data = [];
        while ($row = mysqli_fetch_array($result, 1)) {
            $data[] = $row;
            echo $row['EMAIL'];
            echo "<br/>";
        }
        var_dump($data);

        // Đóng kết nối
        $connect->close();



        if ($data != null && count($data) > 0) {
            header("Location: welcome.php");
        }
    }
};
