<?php
require_once('dbhelp.php');
$id = $fullname = $age = $address = "";

if (!empty($_POST)) {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
    }

    if (isset($_POST['fullname'])) {
        $fullname = $_POST['fullname'];
    }

    if (isset($_POST['age'])) {
        $age = $_POST['age'];
    }

    if (isset($_POST['address'])) {
        $address = $_POST['address'];
    }

    $id = str_replace('\'', '\\\'', $id);
    $fullname = str_replace('\'', '\\\'', $fullname);
    $age = str_replace('\'', '\\\'', $age);
    $address = str_replace('\'', '\\\'', $address);

    if ($id != '') {
        // Update
        $sql = "UPDATE student SET fullname = '$fullname', age = '$age', address = '$address' WHERE id = " . $id;
    } else {
        // Insert
        $sql = "INSERT INTO student (fullname, age, address) VALUES ('$fullname','$age','$address')";
    }

    execute($sql);
    header("Location: index.php");
    die();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM student WHERE id = " . $id;
    $studentList = executeResult($sql);

    if ($studentList != null && count($studentList) > 0) {
        $student = $studentList[0];

        $fullname = $student['fullname'];
        $age = $student['age'];
        $address = $student['address'];
    } else {
        $id = "";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sinh Viên</title>


    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container mt-30">

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">THÊM SINH VIÊN</h3>
            </div>
            <div class="panel-body">
                <form action="" method="POST" role="form">
                    <input type="number" name="id" value="<?= $id ?>" style="display: none;">
                    <div class="form-group">
                        <label for="fullname">Họ tên:</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" value="<?= $fullname ?>">
                    </div>

                    <div class="form-group">
                        <label for="age">Tuổi:</label>
                        <input type="text" class="form-control" id="age" name="age" value="<?= $age ?>">
                    </div>

                    <div class="form-group">
                        <label for="address">Địa chỉ:</label>
                        <input type="text" class="form-control" id="address" name="address" value="<?= $address ?>">
                    </div>

                    <button type="submit" class="btn btn-success">Thêm</button>
                </form>


            </div>
        </div>

    </div>

    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>

</html>