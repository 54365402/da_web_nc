<?php 
require_once('../controller/connection.php');
if(!isset($_GET['id'])){
    echo "<script> alert('lịch học không có sẵn.'); location.replace('./lich_di_lam.php') </script>";
    $mysqli->close();
    exit;
}
$delete = $mysqli->query("DELETE FROM `lich_di_lam` where id = '{$_GET['id']}'");
if($delete){
    echo "<script> alert('Xóa Thành Công.'); location.replace('./lich_di_lam.php') </script>";
}else{
    echo "<pre>";
    echo "An Error occured.<br>";
    echo "Error: ".$mysqli->error."<br>";
    echo "SQL: ".$sql."<br>";
    echo "</pre>";
}
$mysqli->close();
?>