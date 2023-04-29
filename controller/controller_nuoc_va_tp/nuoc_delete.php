<!-- Kết nối CSDL -->
<?php
    include "../connection.php";
    $nuocID = $_POST['nuocID'];
    $sql = "DELETE FROM tbl_nuoc_va_thuc_pham WHERE id_nuoc_va_tp='$nuocID'";
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
?>