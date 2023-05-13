<!-- Kết nối CSDL -->
<?php
    include_once "../connection.php";
    $card_id = $_POST['card_id'];
    $sql = "DELETE FROM card WHERE card_id ='$card_id'";
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
    header("Location: ../../view/the.php");
?>