<!-- Kết nối CSDL -->
<?php
    include_once "../connection.php";
    $tddID = $_POST['tddID'];
    $tddTen = $_POST['tddTen'];
    $tddSoLuong = $_POST['tddSoLuong'];
    $tddNhaCungCap = $_POST['tddNhaCungCap'];
    $tddNgayNhap = $_POST['tddNgayNhap'];
    $tddGiaNhap = $_POST['tddGiaNhap'];
    $tddBaoTri = $_POST['tddBaoTri'];
    $tddBaoHanh = $_POST['tddBaoHanh'];
    $tddChiPhiBaoTri = $_POST['tddChiPhiBaoTri'];
    $tddGhiChu = $_POST['tddGhiChu'];

    $sql = "UPDATE tbl_dung_cu_tap SET ten='".$tddTen."',so_luong=".$tddSoLuong.
    ", nha_cung_cap='".$tddNhaCungCap."', ngay_nhap='".$tddNgayNhap."', gia_nhap=".$tddGiaNhap.
    ", bao_tri='".$tddBaoTri."', bao_hanh='".$tddBaoHanh.
    "', chi_phi_bao_tri=".$tddChiPhiBaoTri.", ghi_chu='".$tddGhiChu."' WHERE id_may=".$tddID;
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
?>