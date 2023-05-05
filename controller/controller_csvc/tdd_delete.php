<!-- Kết nối CSDL -->
<?php
    include_once "../connection.php";
    $tddID = $_POST['tddID'];
    $sql = "DELETE FROM tbl_dung_cu_tap WHERE id_may ='$tddID'";
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
?>