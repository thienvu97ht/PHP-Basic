<?php

function login()
{
    if (!empty($_POST)) {
        $cookieEmail = $_COOKIE["email"];
        $cookiePwd = $_COOKIE["password"];

        $email = $_POST['email'];
        $password = $_POST['password'];

        echo $email . "<br/>" . $password;

        if ($email ==  $cookieEmail && $password == $cookiePwd) {
            header("Location: welcome.php");
        }
    }
};
