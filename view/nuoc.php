<?php
include "header.php";
?>
<link rel="stylesheet" href="./assets/css/nuoc.css">


<!-- tạo giao diện sắp xếp -->
<div>
    <select id='nuoc__select'>
    <option class='nuoc__select--sap_xep' value=0>Sắp xếp</option>
    <option class='nuoc__select--ss_ten' value=0>Tên</option>
    <option class='nuoc__select--ss_gia_ban' value=0>Giá bán</option>
    </select>
</div>

<?php
include "../controller/controller_nuoc_va_tp/nuoc_hien_thi.php"
?>

<div class='clear'></div>

<!-- tạo chỉ mục trang -->
<!-- them--popup -->

<?php include "view_nuoc_popup.php"
?>
<!-- Thêm nước -->

<!-- tạo giao diện nút thêm, sửa, xóa -->
<div class='nuoc__div--chua_button'>
    <button class='nuoc__div--button js-them' type="button" onclick="">Thêm</button>
    <button class='nuoc__div--button js-sua' type="button" onclick="">Cập nhập</button>
    <button class='nuoc__div--button js-xoa nuoc__div--button_xoa' type="button" onclick="">Xóa</button>    
</div>

<!-- bắt sự kiện nút thêm ở ngoài giao diện chính-->
<script src="../controller/controller_nuoc_va_tp/nuoc_add.js">
</script>

<script src="../controller/controller_nuoc_va_tp/nuoc_delete.js"></script>


</body>
</html>