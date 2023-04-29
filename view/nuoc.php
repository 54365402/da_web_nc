<?php
include "header.php";
?>
<link rel="stylesheet" href="./assets/css/nuoc.css">


<!-- tạo giao diện sắp xếp -->
<div>
    <select id='nuoc__select'>
        <option class='nuoc__select--sap_xep' value=0>Sắp xếp</option>
        <option class='nuoc__select--ss_ten' value=1>Tên</option>
        <option class='nuoc__select--ss_gia_ban' value=2>Giá bán</option>
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


<!-- bắt sự kiện nút thêm ở ngoài giao diện chính-->
<script src="../controller/controller_nuoc_va_tp/nuoc_add.js">
</script>

<script src="../controller/controller_nuoc_va_tp/nuoc_delete_update.js"></script>
<!-- <script src="../controller/controller_nuoc_va_tp/nuoc_update.js"></script> -->
<script src="../controller/controller_nuoc_va_tp/nuoc_sort.js"></script>
</body>

</html>