<!-- Kết nối CSDL -->
<?php
    include_once "../../connection.php";
    $personalID = $_POST['personalID'];
    $sql = "DELETE FROM personal WHERE id_personal ='$personalID'";
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
    header("Location: ../../../view/personal.php");
?>