<?php

const HOST = "localhost";
const USERNAME = "root";
const PASSWORD = "";
const DATABASE = 'BanHang';

function createDatabase()
{
    // connection
    $conn = new mysqli(HOST, USERNAME, PASSWORD);
    mysqli_set_charset($conn, 'utf8');

    // create query
    $sql = 'CREATE DATABASE IF NOT EXISTS ' . DATABASE;

    mysqli_query($conn, $sql);

    // Đóng kết nối
    mysqli_close($conn);
}

function createTable()
{
    // connection
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_set_charset($conn, 'utf8');

    // create query
    $sql = 'CREATE TABLE IF NOT EXISTS sanpham (
        id int primary key auto_increment,
        thumbnail varchar(200),
        title varchar(150) not null,
        price int default 0,
        discount int default 0
    )';
    mysqli_query($conn, $sql);

    // Đóng kết nối
    mysqli_close($conn);
}

function initData()
{
    // connection
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_set_charset($conn, 'utf8');

    // create query
    for ($i = 0; $i < 20; $i++) {
        $ramdomImg = "https://picsum.photos/200/300?random=" . $i;
        $ramdomName = "Name" . $i;

        $sql = "INSERT INTO sanpham (thumbnail, title, price, discount) VALUES ('$ramdomImg','$ramdomName','400000','600000')";

        mysqli_query($conn, $sql);
    }

    // Đóng kết nối
    mysqli_close($conn);
}

function executeResult($sql)
{
    // connection
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_set_charset($conn, 'utf8');

    // create query
    $data = [];
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result, 1)) {
        $data[] = $row;
    }

    // Đóng kết nối
    mysqli_close($conn);

    return $data;
}

// Tạo database
createDatabase();

// Tạo bảng
createTable();

// Tạo data ảo
// initData();