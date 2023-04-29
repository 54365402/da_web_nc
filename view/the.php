<?php
include "header.php";
?>
<link rel="stylesheet" href="./assets/css/the.css">

<?php
include "the_hien_thi.php"
?>
<div class='the_div-chua_button'>
    <button class='the_div-button js-them' type="button" onclick="">Thêm</button>
    <button class='the_div-button js-sua' type="button" onclick="">Sửa</button>
    <button class='the_div-button js-xoa the_div-button_xoa' type="button" onclick="">Xóa</button>    
</div>

<!-- tạo giao diện sắp xếp -->
<div>
<?php
include "the_sap_xep.php"
?>
    <select id='the_select'>
    <option class='the_select-sap_xep' value=0>Sắp xếp</option>
    <option class='the_select-ss_ten' value=0>Tên</option>
    <option class='the_select-ss_tien' value=0>Tiền</option>
    </select>
</div>
