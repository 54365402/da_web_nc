<?php
include_once "header.php";
?>
<?php 
    // Start the session
    if($_SESSION['login'] && $_SESSION['chuc_vu']=="Quản lý")
    {
?>

<link rel="stylesheet" href="./assets/css/the.css">

<?php
include_once "the_hien_thi.php"
?>
<div class='the_div-chua_button'>
    <button class='the_div-button js-chi_tiet' type="button" onclick="">Chi Tiết</button> 
    <button class='the_div-button js-them' type="button" onclick="">Thêm</button>
    <button class='the_div-button js-sua' type="button" onclick="">Sửa</button>
    <button class='the_div-button js-xoa the_div-button_xoa' type="button" onclick="">Xóa</button>    
</div>

<!-- tạo giao diện sắp xếp -->
<?php
include_once "the_hien_thi.php"
?>
<div> 
    <select id='the_select'>
    <option class='the_select-sap_xep' value=0>Sắp xếp</option>
    <option class='the_select-ss_ten_az' value=1>Tên từ A->Z</option>
    <option class='the_select-ss_ten_za' value=2>Tên từ Z->A</option>
    <option class='the_select-ss_tien_tang' value=3>Tiền tăng dần</option>
    <option class='the_select-ss_tien_giam' value=4>Tiền giảm dần</option>
    </select>
</div>

<?php include_once "view_the.php"
?>
<script src = "../controller/controller_the/the_sap_xep.js" ></script>

<script src="../controller/controller_the/the_add.js"></script>

<script src = "../controller/controller_the/the_chuc_nang.js" ></script>

<script src = "../controller/controller_the/the_delete.js" ></script>

<?php 
    }
    else{
        header("Location: dang_nhap.php");
    }
?>