<?php
    //ket noi
    include "../connection.php";
    // lay CSDL
    require_once('../../model/modal_the.php');
    $the = new The();
    $the->set_ho_va_ten($_POST["the_table-add_ho_va_ten"]);
    $the->set_id($_POST["the_table-add_id"]);
    $the->set_cardid($_POST["the_table-add_cardid"]);
    $the->set_goi_tap($_POST["the_table-add_goi_tap"]);
    $the->set_so_luong($_POST["the_table-add_so_luong"]);
    $the->set_lop($_POST["the_table-add_lop"]);
    $the->set_ngay_bat_dau($_POST["the_table-add_ngay_bat_dau"]);
    $the->set_ngay_ket_thuc($_POST["the_table-add_ngay_ket_thuc"]);
    $the->set_thanh_tien($_POST["the_table-add_thanh_tien"]);
  

    $sql = "SELECT * FROM card WHERE cardid LIKE N'N%'";
    $query = mysqli_query($mysqli,$sql);
    
    // kiểm tra
    $check = true;
    while($row = mysqli_fetch_array($query)){
        if($row["name"]==$the->get_name())
        {
            $check = false;
        }
    }

    if($the->get_ho_va_ten()==""||$the->get_id()==""||$the->get_card_id()==""||$the->get_goi_tap()==""||$the->get_so_luong()==""||$the->get_lop()==""||$the->get_ngay_bat_dau()==""||$the->get_ngay_ket_thuc()==""||$the->get_thanh_tien()=="")
    {    
    }
    else{
        if($check){
    // Thực hiện truy vấn để thêm dữ liệu vào cơ sở dữ liệu
    $sql = "INSERT INTO card(name,id_hv,card_id,packages,quantity,types_room,time_start,time_end,total_money) VALUES('".$the->get_ho_va_ten()."','".$the->get_id()."','".$the->get_card_id()."','".$the->get_goi_tap()."','".$the->get_lop()."','".$the->get_so_luong()."','".$the->get_ngay_bat_dau()."','".$the->get_ngay_ket_thuc()."','".$the->get_thanh_tien()."')";
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
    //điều hướng trang đến the.php để refresh
    }
    }
    header("Location: ../../view/the.php");
    exit();
?>

