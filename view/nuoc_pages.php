<!-- Kết nối CSDL -->
<?php
    include "../controller/connection.php";
    $sql = "SELECT * FROM tbl_nuoc_va_thuc_pham ORDER BY id_nuoc_va_tp DESC";
    $query = mysqli_query($mysqli,$sql);
?>

<?php
    $count = 0;
    while($row=mysqli_fetch_array($query))
    {
        
    }
?>