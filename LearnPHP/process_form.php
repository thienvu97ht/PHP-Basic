<?php
// var_dump($_POST);
// var_dump($_GET);

// if (isset($_POST['fullname'])) {
//     $fullname = $_POST['fullname'];
//     $address = $_POST['address'];
//     $email = $_POST['email'];

//     echo "Fullname: ";
//     echo $fullname;
//     echo '</br>';

//     echo "Address: ";
//     echo $address;
//     echo '</br>';

//     echo "Email: ";
//     echo $email;
//     echo '</br>';
// };

// if (isset($_GET['fullname'])) {
//     $fullname = $_GET['fullname'];
//     $address = $_GET['address'];
//     $email = $_GET['email'];

//     echo "Fullname: ";
//     echo $fullname;
//     echo '</br>';

//     echo "Address: ";
//     echo $address;
//     echo '</br>';

//     echo "Email: ";
//     echo $email;
//     echo '</br>';
// };

if (isset($_REQUEST['fullname'])) {
    $fullname = $_REQUEST['fullname'];
    $address = $_REQUEST['address'];
    $email = $_REQUEST['email'];

    echo "Fullname: " . $fullname . '</br>';
    echo "Email: " . $email . '</br>';
    echo "Address: " . $address . '</br>';
};
