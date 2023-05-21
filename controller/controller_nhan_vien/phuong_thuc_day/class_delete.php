<!-- Kết nối CSDL -->
<?php
    include_once "../connection.php";
    $classID = $_POST['classID'];
    $sql = "DELETE FROM tbl_class WHERE id_class ='$classID'";
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
    header("Location: ../../../view/class.php");
?>