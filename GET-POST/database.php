<?php

const HOST = "localhost";
const USERNAME = "root";
const PASSWORD = "";
const DATABASE = 'php_basic';

function execute($sql)
{
    // connection
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_set_charset($conn, 'utf8');

    // query
    mysqli_query($conn, $sql);

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