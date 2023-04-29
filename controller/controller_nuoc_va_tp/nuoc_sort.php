<?php
    include "../controller/connection.php";
    $nuoc_orderBy = $_POST['nuoc_orderBy'];
    $sql = "SELECT * FROM tbl_nuoc_va_thuc_pham ORDER BY gia_ban";
    
    
?>