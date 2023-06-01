
<?php
include_once "../../controller/connection.php";
?>

<?php

    $sql = "SELECT * FROM card INNER JOIN tbl_hoi_vien ON card.id_hv = tbl_hoi_vien.id_hv ";
    $query = mysqli_query($mysqli,$sql);
    $_SESSION['card_id'] = $_POST['card_id'];
?>