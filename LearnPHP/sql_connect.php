<?php

require_once("define.php");

// Tạo kết nối đến database
$connect = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);

// CHo phép PHP lưu unicode (utf8) - database
mysqli_set_charset($connect, "utf8");

// Kiểm tra kết nối có thành công
if ($connect->connect_error) {
    var_dump($connect->connect_error);
    die();
}
