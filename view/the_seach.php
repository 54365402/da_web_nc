<?php
    // Nếu có giá trị tìm kiếm
    if(isset($_GET['cardsearch'])) {
        $search_value = $_GET['cardsearch'];
        // Câu truy vấn SQL với điều kiện tìm kiếm
        $sqlthe1 = "SELECT * FROM card WHERE card_id LIKE '%$search_value%' OR types_room LIKE '%$search_value%' ORDER BY card_id DESC LIMIT $start, $limit";
    } else {
        // Câu truy vấn SQL mặc định
        $sqlthe1 = "SELECT * FROM card ORDER BY card_id DESC LIMIT $start, $limit";
    }

    // Thực thi câu truy vấn
    $query = mysqli_query($mysqli, $sqlthe1);

    // Duyệt qua các phần tử trong bảng
    while($row = mysqli_fetch_array($query)) {
        // Code hiển thị dữ liệu trong bảng
    }
?>