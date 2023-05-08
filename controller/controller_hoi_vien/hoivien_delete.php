<!-- Kết nối CSDL -->
<?php
    include_once "../connection.php";
    $hoivienID = $_POST['hoivienID'];
    $sql = "DELETE FROM tbl_hoi_vien WHERE id_hv='$hoivienID'";
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
    header("Location: ../../view/hoivien.php");
    exit();
?>