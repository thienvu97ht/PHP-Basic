<?php
$arr = [1, 2, 3, 4, 5, 6];

for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i];
    echo "<br/>";
};

// $i = 0;
// while ($i < count($arr)) {
//     echo $arr[$i];
//     echo "<br/>";
//     $i++;
// };

// $i = 0;
// do {
//     echo $arr[$i];
//     echo "<br/>";
//     $i++;
// } while ($i < count($arr));

// foreach ($arr as $value) {
//     echo $value;
// };

$arr = [
    "Fullname" => "Dương Đình Thiện Vũ",
    "Gender" => "Nam",
    "Address" => "HÀ TĨNH"
];

// foreach ($arr as $key => $value) {
//     echo $key . ": " . $value;
//     echo "<br/>";
// };

function showMenu($showInfo)
{
    foreach ($showInfo as $key => $value) {
        echo $key . ": " . $value;
        echo "<br/>";
    };
};

showMenu($arr);
