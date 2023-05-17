<?php
include_once "header.php";
?>

<?php 
    // Start the session
    if($_SESSION['login'])
    {
?>

<link rel="stylesheet" href="./assets/css/bang_luong.css">

<!-- them--popup -->

<?php include_once "view_bang_luong.php"
?>

<!-- tạo giao diện sắp xếp -->
<div class="bl__div--search--sort">
    <form class="bl__form--search" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
        <div class="bl__form__div--search">
            <button class='bl__input--search' type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            <input class='bl__input--search' type="text" name="bl__input--search" placeholder="Search....">
        </div>
    </form>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
        <input class="bl--sort" type="submit" value="Sort">
        <select class='bl__select' name='blTang'>
            <option class='bl__select--sap_xep' value=0>Giảm dần</option>
            <option class='bl__select--ss_ten' value=1>Tăng dần</option>
        </select>
        <select class='bl__select' name='blSort'>
            <option class='bl__select--sap_xep' value=0> Sắp xếp</option>
            <option class='bl__select--ss_ten' value=1>Time Start</option>
            <option class='bl__select--ss_bao_hanh' value=2>Lương</option>
            <option class='bl__select--ss_bao_tri' value=3>Tên</option>
        </select>
    </form>
</div>
<!-- Hiển thị -->
<?php
    include_once "../controller/controller_nhan_vien/bang_luong/bl_hien_thi.php";
?>

<div class='clear'></div>

<!-- tạo chỉ mục trang -->
<form class="bl__form--page" method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <center>
        <?php
    echo $listPages;
    ?>
    </center>
</form>

<script src="../controller/controller_nhan_vien/bang_luong/bl_add.js">
</script>

<script src="../controller/controller_nhan_vien/bang_luong/bl_delete_update.js"></script>
<?php 
    }
    else{
        header("Location: dang_nhap.php");
    }
?>
</body>

</html>