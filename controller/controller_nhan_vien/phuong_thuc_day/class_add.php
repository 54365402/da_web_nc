<?php
    //ket noi
    include_once "../connection.php";
    // lay CSDL
    $id_class = $_POST["class_table-add_id_class"];
    $id_nv = $_POST["class_table-add_id_nv"];
    $ten_lop = $_POST["class_table-add_ten_lop"];
    $packages = $_POST["class_table-add_packages"];
    $thoi_luong = $_POST["class_table-add_thoi_luong"];
    $ngay_hoat_dong = $_POST["class_table-add_ngay_hoat_dong"];
    $so_luong_hv = $_POST["class_table-add_so_luong_hv"];
    $doanh_thu = $_POST["class_table-add_doanh_thu"];
    $sql = "SELECT * FROM tbl_class";
    $query = mysqli_query($mysqli,$sql);
    
    // kiểm tra

    
    if($id_nv==""||$ten_lop==""||$packages==""||$ngay_nhap==""||$thoi_luong==""||$ngay_hoat_dong==""||$so_luong_hv=="")
    {    
    }
    else{
        
    // Thực hiện truy vấn để thêm dữ liệu vào cơ sở dữ liệu
    $sql = "INSERT INTO tbl_class(id_class,id_hv,ten_lop,packages,thoi_luong,ngay_hoat_dong,so_luong_hv,doanh_thu VALUES('".$id_class."','".$id_nv."','".$ten_lop."','".$packages."','".$thoi_luong."','".$ngay_hoat_dong."','".$so_luong_hv."','".$doanh_thu."')";
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();

    //điều hướng trang đến class.php để refresh
    }
    header("Location: ../../view/class.php");
    exit();
?>

