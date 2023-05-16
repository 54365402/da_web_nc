<!-- Kết nối CSDL -->
<?php
    include_once "../connection.php";
    $tddID = $_POST['tddID'];
    $sql = "DELETE FROM wardrobe WHERE id_wardrobe ='$tddID'";
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
    header("Location: ../../view/tu_dung_do.php");
?>