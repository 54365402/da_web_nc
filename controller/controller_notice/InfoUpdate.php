<!-- Kết nối CSDL -->
<?php
    include "../connection.php";
    $idTK = $_POST['idTK'];
    $TenTK = $_POST['TenTK'];
    $PassTK = $_POST['PassTK'];
    $HoTenTK = $_POST['HoTenTK'];
    $ChucVuTK = $_POST['ChucVuTK'];
    $sql = "UPDATE account SET username='".$TenTK."',password='".$PassTK."', name = '".$HoTenTK."',
    chuc_vu='".$ChucVuTK."' WHERE id=".$idTK;
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
?>