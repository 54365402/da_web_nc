<?php
    include_once "../controller/connection.php";

    // Sử dụng INNER JOIN để kết nối bảng tbl_hoi_vien và bảng card
    $sql = "SELECT * FROM card INNER JOIN tbl_hoi_vien ON card.id_hv = tbl_hoi_vien.id_hv $postb ORDER BY card_id DESC LIMIT $start, $limit";
    
    $query = mysqli_query($mysqli,$sql);
    
    // Kiểm tra kết nối
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }

    // Định nghĩa biến $keyword
    $keyword = isset($_POST['cardsearch']) ? $_POST['cardsearch'] : "";

    // Hiển thị tìm kiếm
    $postb = "WHERE card.card_id LIKE '%$keyword%' OR tbl_hoi_vien.name_hv LIKE '%$keyword%'";

    // Định nghĩa biến $p
    $p = isset($_GET['page']) ? (int)$_GET['page'] : 1;

    // Số lượng dữ liệu hiển thị trên mỗi trang
    $limit = 14;

    // Tính toán vị trí bắt đầu của dữ liệu trên trang hiện tại
    $start = ($p - 1) * $limit;

    // Câu truy vấn SQL
    $sql = "SELECT card.card_id, tbl_hoi_vien.name_hv, card.total_money, card.status FROM card INNER JOIN tbl_hoi_vien ON card.id_hv = tbl_hoi_vien.id_hv $postb ORDER BY card.card_id DESC LIMIT $start, $limit";

    // Thực thi câu truy vấn
    $query = $mysqli->query($sql);

    // Duyệt qua các phần tử trong bảng
    while ($row = $query->fetch_assoc()) {
        // hiển thị dữ liệu
    }

    // Tính toán và hiển thị phân trang
    $sql_count = "SELECT COUNT(*) as count FROM card INNER JOIN tbl_hoi_vien ON card.id_hv = tbl_hoi_vien.id_hv $postb";
    $result_count = $mysqli->query($sql_count);
    $row_count = $result_count->fetch_assoc();
    $total = $row_count["count"];  // Tổng số dữ liệu
    $page_count = ceil($total / $limit);  // Tổng số trang

    // Đóng kết nối CSDL
    $mysqli->close();
?>