<!-- Kết nối CSDL -->
<?php
    include "../controller/connection.php";
    $sql = "DELETE FROM tbl_nuoc_va_thuc_pham WHERE ";
    $query = mysqli_query($mysqli,$sql);
?>