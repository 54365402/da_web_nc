<?php
    //ket noi
    include_once "../../connection.php";
    $idGift = $_REQUEST['idGift'];
    echo $idGift;
    // Thực hiện truy vấn để thêm dữ liệu vào cơ sở dữ liệu
    $sql = "DELETE FROM tbl_qua_tang WHERE id_gift =$idGift";
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
    header("Location: ../../../view/views_su_kien/sk_td/sk_tich_diem.php");
    exit();
?>

