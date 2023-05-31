<?php 
require_once('../controller/connection.php');
if($_SERVER['REQUEST_METHOD'] !='POST'){
    $mysqli->close();
    exit;
}
extract($_POST);
$allday = isset($allday);

if(empty($id)){
    $sql = "INSERT INTO `lich_di_lam` (`lop`,`nhan_vien`,`ngay_bat_dau`,`ngay_ket_thuc`) VALUES ('$lop','$nhan_vien','$ngay_bat_dau','$ngay_ket_thuc')";
}else{
    $sql = "UPDATE `lich_di_lam` set `lop` = '{$lop}', `nhan_vien` = '{$nhan_vien}', `ngay_bat_dau` = '{$ngay_bat_dau}', `ngay_ket_thuc` = '{$ngay_ket_thuc}' where `id` = '{$id}'";
}
$save = $mysqli->query($sql);
if($save){
    echo "<script> alert('thêm lịch học thành công.'); location.replace('./lich_di_lam.php') </script>";
}else{
    echo "<pre>";
    echo "An Error occured.<br>";
    echo "Error: ".$mysqli->error."<br>";
    echo "SQL: ".$sql."<br>";
    echo "</pre>";
}
$mysqli->close();
?>