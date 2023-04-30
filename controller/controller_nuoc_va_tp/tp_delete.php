<!-- Kết nối CSDL -->
<?php
    include "../connection.php";
    $tpID = $_POST['tpID'];
    $sql = "DELETE FROM tbl_nuoc_va_thuc_pham WHERE id_nuoc_va_tp='$tpID'";
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
?>