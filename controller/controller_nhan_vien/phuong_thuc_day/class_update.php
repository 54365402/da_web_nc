<!-- Kết nối CSDL -->
<?php
    include_once "../connection.php";
    $id_class = $_POST['id_class'];
    $ten_lop = $_POST['ten_lop'];
    $packages = $_POST['packages'];
    $thoi_luong = $_POST['thoi_luong'];
    $ngay_hoat_dong = $_POST['ngay_hoat_dong'];
    $so_luong_hv = $_POST['so_luong_hv'];
    $name = $_POST['name'];
    $id_nv = $_POST['id_nv'];
    $doanh_thu = $_POST['doanh_thu'];

    $sql = "UPDATE tbl_class SET ten_lop ='".$ten_lop."',packages =".$packages.",
    thoi_luong ='".$thoi_luong."', ngay_hoat_dong =".$ngay_hoat_dong.",
    so_luong_hv ='".$so_luong_hv."', name ='".$classTeacher."',
    id_nv =".$id_nv.", doanh_thu ='".$doanh_thu."' WHERE id_class=".$id_class;
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
    header("Location: ../../../view/class.php");
?>