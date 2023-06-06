<?php
    include_once "../../controller/connection.php";

    // Lấy dữ liệu đã sửa từ phía client
    $cardID = $_REQUEST['cardID'];
    $idHV = $_POST['idHV'];
    $idNV = $_POST['idNV'];

    // Tiến hành cập nhật dữ liệu vào cơ sở dữ liệu
    $sql = "UPDATE card SET Where id_hv = '".$idHV."', id_nv = '".$idNV."' WHERE card_id = '".$cardID."'";
    $result = mysqli_query($mysqli, $sql);
    $mysqli->close();

    // Kiểm tra kết quả và trả về phản hồi cho client
    if ($result) {
    echo "Dữ liệu đã được cập nhật thành công";
    } else {
    echo "Có lỗi xảy ra khi cập nhật dữ liệu";
    }
?>
