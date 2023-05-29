<?php
    // Kết nối CSDL
    include_once "../controller/connection.php";
    include_once "the_hien_thi.php";

    // Lấy giá trị sắp xếp từ yêu cầu AJAX
    $sort = isset($_GET['sort']) ? $_GET['sort'] : '';


    // Câu truy vấn SQL dựa trên giá trị sắp xếp
    if ($sort == 'the_select-sap_xep_az') {
        $sql = "SELECT * FROM card Inner Join tbl_hoi_vien On card.id_hv = tbl_hoi_vien.id_hv ORDER BY name_hv ASC";
    } elseif ($sort == 'the_select-sap_xep_za') {
        $sql = "SELECT * FROM card Inner Join tbl_hoi_vien On card.id_hv = tbl_hoi_vien.id_hv ORDER BY name_hv DESC";
    } elseif ($sort == 'the_select-ss_tien_tang') {
        $sql = "SELECT * FROM card Inner Join tbl_hoi_vien On card.id_hv = tbl_hoi_vien.id_hv ORDER BY total_money ASC";
    } elseif ($sort == 'the_select-ss_tien_giam') {
        $sql = "SELECT * FROM card Inner Join tbl_hoi_vien On card.id_hv = tbl_hoi_vien.id_hv ORDER BY total_money DESC";
    } else {
        $sql = "SELECT * FROM card Inner Join tbl_hoi_vien On card.id_hv = tbl_hoi_vien.id_hv" ;
    }

    // Thực thi câu truy vấn
    $query = mysqli_query($mysqli, $sql);
   
    // Tạo các dòng và cột trong bảng
    // $output = '';
    // while ($row = mysqli_fetch_array($query)) {
    //     $output .= '<tr class="the_table_row-hienthi">';
    //     $output .= '<td class="the_td_hien_thi">' . $row["card_id"] . '</td>';
    //     $output .= '<td class="the_td_hien_thi">' . $row["name_hv"] . '</td>';
    //     $output .= '<td class="the_td_hien_thi">' . $row["total_money"] . '</td>';
    //     $output .= '<td class="the_td_hien_thi">' . ($row["status"] == 1 ? 'Đang hoạt động' : 'Không hoạt động') . '</td>';
    //     $output .= '</tr>';
    // }
    // // Trả về kết quả dưới dạng HTML
    // echo $output;
    
?>
