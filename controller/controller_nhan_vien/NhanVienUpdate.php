<!-- Kết nối CSDL -->
<?php
    include "../connection.php";
    $nhanvienID = $_POST['nhanvienID'];
    $nhanvien_ten = $_POST['nhanvien_ten'];
    $nhanvien_gioi_tinh = $_POST['nhanvien_gioi_tinh'];
    $nhanvien_tuoi = $_POST['nhanvien_tuoi'];
    $nhanvien_sdt = $_POST['nhanvien_sdt'];
    $nhanvien_cmnd = $_POST['nhanvien_cmnd'];
    $nhanvien_bien_so_xe = $_POST['nhanvien_bien_so_xe'];
    $nhanvien_dia_chi = $_POST['nhanvien_dia_chi'];
    $nhanvien_chuc_vu = $_POST['nhanvien_chuc_vu'];
    $nhanvien_gmail = $_POST['nhanvien_gmail'];

    $sql = "UPDATE tbl_nhan_vien SET name ='".$nhanvien_ten."',
    gioi_tinh='".$nhanvien_gioi_tinh."', tuoi='".$nhanvien_tuoi."',
    sdt='".$nhanvien_sdt."', cmnd='".$nhanvien_cmnd."', bien_so_xe='".$nhanvien_bien_so_xe."',
    dia_chi='".$nhanvien_dia_chi."' ,chuc_vu='".$nhanvien_chuc_vu."', gmail='".$nhanvien_gmail."' WHERE id_nv=".$nhanvienID;
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
?>