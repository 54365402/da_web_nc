<!-- Kết nối CSDL -->
<?php
    include "../connection.php";
    $nuocID = $_POST['nuocID'];
    $sql = "UPDATE tbl_nuoc_va_thuc_pham SET  WHERE id_nuoc_va_tp='$nuocID'";
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
?>