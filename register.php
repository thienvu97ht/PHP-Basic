<?php

function register()
{
    if (!empty($_POST)) {
        $fullname = $_POST["fullname"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];

        $_SESSION['fullname'] = $fullname;
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $phone;

        // setcookie("fullname", $fullname, time() + 24 * 60 * 60, "./");
        // setcookie("username", $username, time() + 24 * 60 * 60, "./");
        // setcookie("password", $password, time() + 24 * 60 * 60, "./");
        // setcookie("email", $email, time() + 24 * 60 * 60, "./");
        // setcookie("phone", $phone, time() + 24 * 60 * 60, "./");

        header("Location: bai5.php");
    }
}
