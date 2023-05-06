<?php
include_once "header.php";
?>
<link rel="stylesheet" href="./assets/css/nuoc.css">

<!-- them--popup -->

<?php include_once "view_nuoc_popup.php"
?>


<!-- tạo giao diện sắp xếp -->
<div>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
    <input class="nuoc--sort" type="submit" value="Sort">
    <select class='nuoc__select' name='nuocTang'>
        <option class='nuoc__select--sap_xep' value=0>Giảm dần</option>
        <option class='nuoc__select--ss_ten' value=1>Tăng dần</option>
    </select>
    <select class='nuoc__select' name='nuocSort'>
        <option class='nuoc__select--sap_xep' value=0> Sắp xếp</option>
        <option class='nuoc__select--ss_ten' value=1>Tên</option>
        <option class='nuoc__select--ss_gia_ban' value=2>Giá bán</option>
    </select>
    </form>
</div>

<?php
include_once "../controller/controller_nuoc_va_tp/nuoc_hien_thi.php"
?>

<div class='clear'></div>

<!-- tạo chỉ mục trang -->
<form class="nuoc__form--page" method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <center>
    <?php
    echo $listPages;
    ?>
    </center>
</form>

<script src="../controller/controller_nuoc_va_tp/nuoc_add.js">
</script>

<script src="../controller/controller_nuoc_va_tp/nuoc_delete_update.js"></script>

</body>

</html>