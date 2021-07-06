<?php
$hovaten = "";
if (isset($_GET['ten'])) {
    $hovaten = $_GET['ten'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

</head>

<body>
    <h1 style="color: black">Chúc mừng <font color="red"><?= $hovaten ?></font> Đã đăng ký thành công</h1>

</body>

</html>