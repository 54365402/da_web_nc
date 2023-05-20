<?php
    //ket noi
    include_once "../connection.php";
    // lay CSDL
    require_once('../../model/modal_hoivien.php');
    $hoivien = new hoivien();
    $hoivien->set_name_hv($_POST["hoivien__table-add-ten"]);
    $hoivien->set_ngay_sinh($_POST["hoivien__table-add-ngay_sinh"]);
    $hoivien->set_gioi_tinh($_POST["hoivien__table-add-gioi_tinh"]);
    $hoivien->set_tuoi($_POST["hoivien__table-add-tuoi"]);
    $hoivien->set_sdt($_POST["hoivien__table-add-sdt"]);
    $hoivien->set_cmnd($_POST["hoivien__table-add-cmnd"]);
    $hoivien->set_bien_xe($_POST["hoivien__table-add-bien_xe"]);
    $hoivien->set_diem_tich_luy($_POST["hoivien__table-add-diem"]);
    $hoivien->set_chieu_cao($_POST["hoivien__table-add-chieu_cao"]);
    $hoivien->set_can_nang($_POST["hoivien__table-add-can_nang"]);
    $hoivien->set_phan_tram_mo($_POST["hoivien__table-add-pt_mo"]);
    
    // Kiểm tra điều kiện
if (
    $hoivien->get_name_hv() == "" || $hoivien->get_ngay_sinh() == "" || $hoivien->get_gioi_tinh() == "" ||
    $hoivien->get_tuoi() == "" || $hoivien->get_sdt() == "" || $hoivien->get_cmnd() == "" ||
    $hoivien->get_bien_xe() == "" || $hoivien->get_diem_tich_luy() == "" || $hoivien->get_chieu_cao() == "" ||
    $hoivien->get_can_nang() == "" || $hoivien->get_phan_tram_mo() == ""
    ) {
    // Không làm gì nếu có giá trị trống
    } else {
    // Thực hiện truy vấn để thêm dữ liệu vào cơ sở dữ liệu
    $sql = "INSERT INTO tbl_hoi_vien (name_hv, ngay_sinh, gioi_tinh, tuoi, sdt, cmnd, bien_xe, diem_tich_luy, chieu_cao, can_nang, phan_tram_mo) VALUES ('" . $hoivien->get_name_hv() . "','" . $hoivien->get_ngay_sinh() . "','" . $hoivien->get_gioi_tinh() . "','" . $hoivien->get_tuoi() . "','" . $hoivien->get_sdt() . "','" . $hoivien->get_cmnd() . "','" . $hoivien->get_bien_xe() . "','" . $hoivien->get_diem_tich_luy() . "','" . $hoivien->get_chieu_cao() . "','" . $hoivien->get_can_nang() . "','" . $hoivien->get_phan_tram_mo() . "')";
    $query = mysqli_query($mysqli, $sql);
    $mysqli->close();
    }
    //điều hướng trang đến hoivien.php để refresh
    header("Location: ../../view/hoivien.php");
    exit();
?>