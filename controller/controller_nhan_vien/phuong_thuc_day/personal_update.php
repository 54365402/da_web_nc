<!-- Kết nối CSDL -->
<?php
    include_once "../connection.php";
    $personalID = $_POST['personalID'];
    $personal_name_hv = $_POST['personal_name_hv'];
    $personal_id_hv = $_POST['personal_id_hv'];
    $personal_thoi_luong = $_POST['personal_thoi_luong'];
    $personal_so_buoi= $_POST['personal_so_buoi'];
    $personal_id_nv = $_POST['personal_id_nv'];
    $personal_doanh_thu = $_POST['personal_doanh_thu'];

    $sql = "UPDATE personal SET so_tu='".$personal_name_hv."',loai_tu='".$personal_id_hv."',
    trang_thai='".$personal_thoi_luong."', id_hv='".$personal_so_buoi."',
    time_start='".$personal_id_nv."', time_end='".$personal_doanh_thu."' WHERE id_personal=".$personalID;
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
    header("Location: ../../view/personal.php");
?>