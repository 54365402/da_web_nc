<!-- Kết nối CSDL -->
<?php
    include_once "../../connection.php";
    $blID = $_POST['blID'];
    $sql = "DELETE FROM luong WHERE id_nv ='$blID'";
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
    header("Location: ../../../view/nv_bang_luong.php");
?>