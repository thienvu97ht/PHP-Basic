<?php
require_once('database.php');

if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $sql = "DELETE FROM students WHERE id = " . $delete_id;
    execute($sql);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Sinh Viên</title>


    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container mt-30">

        <div class="panel panel-primary">
            <div class="panel-heading title-table">
                <h3 class="panel-title">QUẢN LÝ SINH VIÊN</h3>
                <a href="./them.php">
                    <button class="btn btn-success">THÊM SINH VIÊN</button>
                </a>
            </div>
            <div class="panel-body">

                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM students";
                        $result = executeResult($sql);
                        $no = 1;

                        foreach ($result as $row) {
                            echo '
                                <tr>
                                    <td>' . ($no++) . '</td>
                                    <td>' . $row['fullname'] . '</td>
                                    <td>' . $row['email'] . '</td>
                                    <td>' . $row['address'] . '</td>
                                    <td class="text-center">
                                        <a href="?delete_id=' . $row['id'] . '" >
                                            <button class="btn btn-danger">
                                                Xóa
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            ';
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>

    </div>

    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>

</html>