<?php

function login()
{
    if (!empty($_POST)) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        echo $email . "<br/>" . $password . "<br/>";

        // Tạo kết nối đến database
        require_once("sql_connect.php");

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
        require_once("sql_close.php");

        if ($data != null && count($data) > 0) {
            header("Location: welcome.php");
        }
    }
};
