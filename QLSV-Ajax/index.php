<?php
require_once('dbhelp.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QLSV - Ajax</title>

    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <div class="container mt-30">

        <div class="panel panel-primary">
            <div class="panel-heading title-table">
                <h3 class="panel-title">Quản lý thông tin sinh viên</h3>
                <a href="./input.php">
                    <button class="btn btn-success">THÊM SINH VIÊN</button>
                </a>
            </div>
            <div class="panel-body">

                <form action="" method="GET">
                    <input type="text" name="s" class="form-control" required="required"
                        placeholder="Tìm kiếm theo tên">
                </form>

                <table class="table table-bordered table-hover mt-30">
                    <thead>
                        <tr>
                            <th width="60px" class="text-center">STT</th>
                            <th class="text-center">Họ tên</th>
                            <th class="text-center">Tuổi</th>
                            <th class="text-center">Địa chỉ</th>
                            <th class="text-center" colspan='2'>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_GET['s']) && $_GET['s'] != '') {
                            $sql = "SELECT * FROM student WHERE fullname LIKE '%" . $_GET['s'] . "%'";
                        } else {
                            $sql = "SELECT * FROM student";
                        }


                        $studentList = executeResult($sql);
                        $index = 1;

                        foreach ($studentList as $std) {
                            echo '
                                <tr>
                                    <td class="text-center">' . ($index++) . '</td>
                                    <td>' . $std['fullname'] . '</td>
                                    <td class="text-center">' . $std['age'] . '</td>
                                    <td>' . $std['address'] . '</td>
                                    <td class="text-center">
                                        <a href="input.php?id=' . $std['id'] . '" >
                                            <button class="btn btn-success">
                                                Sửa
                                            </button>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-danger" onclick="deleteStudent(' .  $std['id'] . ')">
                                            Xóa
                                        </button>
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
    <script>
    // Cú pháp Ajax:
    // $.get(URL, callback);

    // Trong đó:
    // URL: Chỉ định URL bạn muốn yêu cầu.
    // callback: Tên của một hàm sẽ được thực thi sau nếu yêu cầu thành công.

    // $.post(URL,data,callback);
    // Trong đó:

    // URL: Chỉ định URL bạn muốn yêu cầu.
    // data: Chỉ định một số dữ liệu để gửi cùng với yêu cầu.
    // callback: Tên của một hàm sẽ được thực thi sau nếu yêu cầu thành công.


    // Hàm xóa sinh viên
    function deleteStudent(id) {
        let option = confirm('Bạn có muốn xóa sinh viên');

        if (option) {
            $.post('delete_student.php', {
                'id': id
            }, function(data) {
                alert(data)
                location.reload();
            })
        }
    }
    </script>
</body>

</html>