<?php
$sqlthe2 = "SELECT * FROM card ORDER BY card_id";
$query = mysqli_query($mysqli, $sqlthe2);

$data = array();
while ($row = mysqli_fetch_assoc($query)) {
    $data[] = $row;
}

// kiểm tra nếu người dùng đã chọn tùy chọn sắp xếp
if (isset($_POST['the_select'])) {
    $sort = $_POST['the_select'];
    if ($sort == 'types_room') {
        // sắp xếp theo tên
        usort($data, function($a, $b) {
            return strcmp($a['types_room'], $b['types_room']);
        });
    } elseif ($sort == 'total_money') {
        // sắp xếp theo số tiền
        usort($data, function($a, $b) {
            return $a['total_money'] - $b['total_money'];
        });
    }
}
?>