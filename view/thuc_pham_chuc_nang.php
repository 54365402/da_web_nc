<?php
include "header.php";
?>
<link rel="stylesheet" href="./assets/css/thucPham.css">


<!-- tạo giao diện sắp xếp -->
<div>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
    <input class="tp--sort" type="submit" value="Sort">
    <select class='tp__select' name='tpTang'>
        <option class='tp__select--sap_xep' value=0>Giảm dần</option>
        <option class='tp__select--ss_ten' value=1>Tăng dần</option>
    </select>
    <select class='tp__select' name='tpSort'>
        <option class='tp__select--sap_xep' value=0>Sắp xếp</option>
        <option class='tp__select--ss_ten' value=1>Tên</option>
        <option class='tp__select--ss_gia_ban' value=2>Giá bán</option>
    </select>
    </form>
</div>

<?php
include "../controller/controller_nuoc_va_tp/tp_hien_thi.php"
?>

<div class='clear'></div>

<!-- tạo chỉ mục trang -->
<form class="tp__form--page" method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <center>
    <?php
    echo $listPages;
    ?>
    </center>
</form>
<!-- them--popup -->

<?php include "view_tp_popup.php"
?>

<script src="../controller/controller_nuoc_va_tp/tp_add.js">
</script>

<script src="../controller/controller_nuoc_va_tp/tp_delete_update.js"></script>
<!-- <script src="../controller/controller_nuoc_va_tp/tp_sort.js"></script> -->
</body>

</html>