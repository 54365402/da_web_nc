<?php
    include_once "../connection.php";
    $nhanvienID = $_POST['nhanvienID'];
    $sql = "DELETE FROM tbl_nhan_vien WHERE id_nv='$nhanvienID'";
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
    header("Location: ../../view/nhanvien.php");
    exit();
?>