<!-- Kết nối CSDL -->
<?php
    include_once "../connection.php";
    $idnv = $_POST['blidnv'];
    $time_start = $_POST['bltime_start'];
    $so_cong = $_POST['blso_cong'];
    $luong_tren_cong = $_POST['blluong_tren_cong'];
    $luong = $_POST['blluong'];
    $trang_thai = $_POST['bltrang_thai'];

    $sql = "UPDATE luong SET time_start='".$time_start."',so_cong=".$so_cong.
    ", luong_tren_cong='".$luong_tren_cong."', luong='".$luong."', trang_thai=".$trang_thai.
    " WHERE id_nv=".$idnv;
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
    header("Location: ../../../view/nv_bang_luong.php");
?>