<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Tutorial</title>

    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

</head>

<body>
    <h1 class="text-center">
        Chào mừng 500 ae!
    </h1>

    <div class="container-fluid">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Full name</th>
                <th>User name</th>
                <th>Password</th>
                <th>Email</th>
                <th>Phone number</th>
            </tr>

            <tbody>
                <?php
                require_once("sql_connect.php");

                $query = "SELECT * FROM STUDENT";
                $result = mysqli_query($connect, $query);

                $data = [];
                while ($row = mysqli_fetch_array($result, 1)) {
                    $data[] = $row;
                }
                require_once("sql_close.php");

                // Hiển thị ra table
                for ($i = 0; $i < count($data); $i++) {
                    echo '
                    <tr>
                        <td>' . ($i + 1) . '</td>
                        <td>' . $data[$i]['FULL_NAME'] . '</td>
                        <td>' . $data[$i]['USER_NAME'] . '</td>
                        <td>' . $data[$i]['PASSWORD'] . '</td>
                        <td>' . $data[$i]['EMAIL'] . '</td>
                        <td>' . $data[$i]['PHONE_NUMBER'] . '</td>
                    </tr>';
                };
                ?>
            </tbody>
        </table>
    </div>

    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>

</html>