<?php

function login()
{
    if (!empty($_POST)) {
        // $cookieEmail = $_COOKIE["email"];
        // $cookiePwd = $_COOKIE["password"];
        $sessionEmail =  $sessionPwd = "";

        if (isset($_SESSION['email'])) {
            $sessionEmail = $_SESSION['email'];
        }

        if (isset($_SESSION['password'])) {
            $sessionPwd = $_SESSION['password'];
        }

        $email = $_POST['email'];
        $password = $_POST['password'];

        echo $email . "<br/>" . $password;

        if ($email ==  $sessionEmail && $password == $sessionPwd) {
            header("Location: welcome.php");
        }
    }
};
