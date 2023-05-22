<?php
    include "../controller/connection.php";
    $selectedOption = $_POST["nhanvien__search-btn"];

    $sql = "SELECT * FROM tbl_nhan_vien WHERE 'chuc_vu' LIKE '".$selectedOption."' ";
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
?>