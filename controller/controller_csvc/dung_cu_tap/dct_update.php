<!-- Kết nối CSDL -->
<?php
    include_once "../../connection.php";
    $dctID = $_POST['dctID'];
    $dctTen = $_POST['dctTen'];
    $dctSoLuong = $_POST['dctSoLuong'];
    $dctNhaCungCap = $_POST['dctNhaCungCap'];
    $dctNgayNhap = $_POST['dctNgayNhap'];
    $dctGiaNhap = $_POST['dctGiaNhap'];
    $dctBaoTri = $_POST['dctBaoTri'];
    $dctBaoHanh = $_POST['dctBaoHanh'];
    $dctChiPhiBaoTri = $_POST['dctChiPhiBaoTri'];
    $dctGhiChu = $_POST['dctGhiChu'];

    $sql = "UPDATE tbl_dung_cu_tap SET ten='".$dctTen."',so_luong=".$dctSoLuong.
    ", nha_cung_cap='".$dctNhaCungCap."', ngay_nhap='".$dctNgayNhap."', gia_nhap=".$dctGiaNhap.
    ", bao_tri='".$dctBaoTri."', bao_hanh='".$dctBaoHanh.
    "', chi_phi_bao_tri=".$dctChiPhiBaoTri.", ghi_chu='".$dctGhiChu."' WHERE id_may=".$dctID;
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
    header("Location: ../../view/views_csvc/dung_cu_tap/dung_cu_tap.php");
?>