<!-- Kết nối CSDL -->
<?php
    include_once "../connection.php";
    $snhvid_hv = $_POST['snhvid_hv'];
    $snhvname_hv = $_POST['snhvname_hv'];
    $snhvdiem_tich_luy = $_POST['snhvdiem_tich_luy'];
    $snhvngay_sinh = $_POST['snhvngay_sinh'];
    $snhvid_gift = $_POST['snhvid_gift'];
    $snhvtrang_thai = $_POST['snhvtrang_thai'];

    $sql = "UPDATE luong SET name_hv='".$snhvtname_hv."',diem_tich_luy=".$snhvdiem_tich_luy.
    ", ngay_sinh='".$snhvlngay_sinh."', id_gift='".$snhvid_gift."', trang_thai=".$snhvtrang_thai.
    " WHERE id_hv=". $snhvid_hv;
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
    header("Location: ../../../view/sk_sinh_nhat_hoi_vien.php");
?>