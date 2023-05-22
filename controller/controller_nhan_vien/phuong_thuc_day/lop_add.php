<?php
    //ket noi
    include_once "../connection.php";

    // lay CSDL
    $id_nv = $_POST["lop_table-add-id_nv"];
    $ten_lop = $_POST["lop_table-add-ten_lop"];
    $packages = $_POST["lop_table-add-packages"];
    $thoi_luong = $_POST["lop_table-add-thoi_luong"];
    $ngay_hoat_dong = $_POST["lop_table-add-ngay_hoat_dong"];
    $so_luong_hv = $_POST["lop_table-add-so_luong_hv"];
    $doanh_thu = $_POST["lop_table-add-doanh_thu"];
    $sql = "SELECT * FROM tbl_lop";
    $query = mysqli_query($mysqli,$sql);
    
    // kiểm tra
    if($id_nv==""||$ten_lop==""||$packages==""||$thoi_luong==""||$ngay_hoat_dong==""||$so_luong_hv=="")
    {   
    }
    else{ 
        
    // Thực hiện truy vấn để thêm dữ liệu vào cơ sở dữ liệu
    $sql = "INSERT INTO tbl_lop(id_nv,ten_lop,packages,thoi_luong,ngay_hoat_dong,so_luong_hv,doanh_thu) VALUES('".$id_nv."','".$ten_lop."','".$packages."','".$thoi_luong."','".$ngay_hoat_dong."','".$so_luong_hv."','".$doanh_thu."')";
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();

    //điều hướng trang đến tbl_class.php để refresh
    header("Location: ../../../view/lop.php");
    exit();
     }

?>

