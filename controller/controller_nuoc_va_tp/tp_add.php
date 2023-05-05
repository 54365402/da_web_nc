<?php
    //ket noi
    include_once "../connection.php";
    // lay CSDL
    require_once('../../model/modal_tp.php');
    $tp = new Tp();
    $tp->set_name($_POST["tp__table--add_ten"]);
    $tp->set_loai_tp($_POST["tp__table--add_loai_san_pham"]);
    $tp->set_gia_ban($_POST["tp__table--add_gia_ban"]);
    $tp->set_gia_nhap($_POST["tp__table--add_gia_nhap"]);
    $tp->set_so_luong_nhap($_POST["tp__table--add_so_luong_nhap"]);
    $tp->set_so_luong_ton($_POST["tp__table--add_so_luong_ton"]);
    $tp->set_nha_cung_cap($_POST["tp__table--add_nha_cung_cap"]);
    $tp->set_ngay_nhap($_POST["tp__table--add_ngay_nhap"]);
    $tp->set_ngay_het_han($_POST["tp__table--add_ngay_het_han"]);

    //kiem tra ten
    $sql = "SELECT * FROM tbl_nuoc_va_thuc_pham WHERE loai_tp LIKE N'T%'";
    $query = mysqli_query($mysqli,$sql);
    
    // kiểm tra
    $check = true;
    while($row = mysqli_fetch_array($query)){
        if($row["name"]==$tp->get_name())
        {
            $check = false;
        }
    }

    if($tp->get_name()==""||$tp->get_loai_tp()==""||$tp->get_gia_ban()==""||$tp->get_gia_nhap()==""||$tp->get_so_luong_nhap()==""||$tp->get_so_luong_ton()==""||$tp->get_nha_cung_cap()==""||$tp->get_ngay_nhap()==""||$tp->get_ngay_het_han()=="")
    {
        
    }
    else{
        if($check){
    // Thực hiện truy vấn để thêm dữ liệu vào cơ sở dữ liệu
    $sql = "INSERT INTO tbl_nuoc_va_thuc_pham(name,loai_tp,gia_ban,gia_nhap,so_luong_nhap,so_luong_ton,nha_cung_cap,ngay_nhap,ngay_het_han) VALUES('".$tp->get_name()."','".$tp->get_loai_tp()."','".$tp->get_gia_ban()."','".$tp->get_gia_nhap()."','".$tp->get_so_luong_nhap()."','".$tp->get_so_luong_ton()."','".$tp->get_nha_cung_cap()."','".$tp->get_ngay_nhap()."','".$tp->get_ngay_het_han()."')";
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
    }
}
    //điều hướng trang đến tp.php để refresh
    header("Location: ../../view/thuc_pham_chuc_nang.php");
    exit();
?>

