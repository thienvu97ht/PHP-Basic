<?php
require_once('database.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination</title>

    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

</head>

<body>
    <div class="container" style="margin-top: 30px">
        <div class="row">
            <?php
            $sql = "SELECT count(id) as NUMBER FROM sanpham";
            $result = executeResult($sql);
            $number = 0;
            if ($result != null && count($result) > 0) {
                $number = $result[0]['NUMBER'];
            }

            $itemPerPage = 8;
            $totalPage = ceil($number / $itemPerPage);
            $curent_page = 1;

            if (isset($_GET['page'])) {
                $curent_page = $_GET['page'];
            }
            $start = ($curent_page - 1) * $itemPerPage;

            // Hàm LIMIT truyền vào vị trí bắt đầu và số row lấy ra
            $sql = "SELECT * FROM sanpham LIMIT $start, $itemPerPage";
            $result = executeResult($sql);

            foreach ($result as $sanpham) {
                echo '
                <div class="col-md-3">
                    <img src="' . $sanpham['thumbnail'] . '"
                        alt="" width="100%">
                    <p for="">' . $sanpham['title'] . '</p>
                    <p>' . $sanpham['price'] . ' VNĐ<del>' . $sanpham['discount'] . ' VNĐ</del></p>
                </div>';
            }
            ?>
        </div>


        <ul class="pagination">
            <?php
            echo '<li><a href="?page=' . 1 . '">&laquo;</a></li>';
            for ($i = 1; $i <= $totalPage; $i++) {
                echo '<li><a href="?page=' . $i . '">' . $i . '</a></li>';
            }
            echo '<li><a href="?page=' . $totalPage . '">&raquo;</a></li>';
            ?>
        </ul>

    </div>


    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>

</html>