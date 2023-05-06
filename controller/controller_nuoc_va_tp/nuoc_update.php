<!-- Kết nối CSDL -->
<?php
    include "../connection.php";
    $nuocID = $_POST['nuocID'];
    $nuocTen = $_POST['nuocTen'];
    $nuocLoai = $_POST['nuocLoai'];
    $nuocGiaBan = $_POST['nuocGiaBan'];
    $nuocGiaNhap = $_POST['nuocGiaNhap'];
    $nuocSoLuongNhap = $_POST['nuocSoLuongNhap'];
    $nuocSoLuongTon = $_POST['nuocSoLuongTon'];
    $nuocNhaCungCap = $_POST['nuocNhaCungCap'];
    $nuocNgayNhap = $_POST['nuocNgayNhap'];
    $nuocNgayHetHan = $_POST['nuocNgayHetHan'];
    $nuocTongTien = $_POST['nuocTongTien'];
    $sql = "UPDATE tbl_nuoc_va_thuc_pham SET name='".$nuocTen."',loai_tp='".$nuocLoai.
    "', gia_ban=".$nuocGiaBan.", gia_nhap=".$nuocGiaNhap.", so_luong_nhap=".$nuocSoLuongNhap.
    ", so_luong_ton=".$nuocSoLuongTon.", nha_cung_cap='".$nuocNhaCungCap.
    "', ngay_nhap='".$nuocNgayNhap."', ngay_het_han='".$nuocNgayHetHan.
    "', tong_tien=". $nuocTongTien.  " WHERE id_nuoc_va_tp=".$nuocID;
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
    header("Location: ../../view/hoivien.php");
    exit();
?>