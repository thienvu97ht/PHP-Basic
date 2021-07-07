<?php
require_once('dbhelp.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM student WHERE id = " . $id;
    execute($sql);

    echo 'Xóa thành công';
}