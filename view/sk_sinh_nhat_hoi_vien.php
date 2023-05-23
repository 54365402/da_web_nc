<?php
include_once "header.php";
?>

<?php 
    // Start the session
    if($_SESSION['login'])
    {
?>

<link rel="stylesheet" href="./assets/css/sinh_nhat_hoi_vien.css">


<!-- tạo giao diện sắp xếp -->

<div class="snhv__div--search--sort">
<li class="snhv__icon_back"><a class="snhv-a" href="nhanvien.php"><i class="fa-solid fa-arrow-left"></i></a></li>
    <form class="snhv__form--search" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
        <div class="snhv__form__div--search">
            <button class='snhv__input--search' type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            <input class='snhv__input--search' type="text" name="snhv__input--search" placeholder="Search....">
        </div>
    </form>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
        <input class="snhv--sort" type="submit" value="Sort">
        <select class='snhv__select' name='snhvTang'>
            <option class='snhv__select--sap_xep' value=0>Giảm dần</option>
            <option class='snhv__select--ss_ten' value=1>Tăng dần</option>
        </select>
        <select class='snhv__select' name='snhvSort'>
            <option class='snhv__select--sap_xep' value=0> Sắp xếp</option>
            <option class='snhv__select--ss_ten' value=1>Time Start</option>
            <option class='snhv__select--ss_bao_hanh' value=2>Lương</option>
            <option class='snhv__select--ss_bao_tri' value=3>Tên</option>
        </select>
    </form>
</div>
<!-- Hiển thị -->
<?php
    include_once "../controller/controller_su_kien/sinh_nhat_hoi_vien/snhv_hien_thi.php";
?>

<div class='clear'></div>

<!-- tạo chỉ mục trang -->
<form class="snhv__form--page" method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <center>
        <?php
    echo $listPages;
    ?>
    </center>
</form>


<script src="../controller/controller_nhan_vien/snhv/snhv_delete_update.js"></script>
<?php 
    }
    else{
        header("Location: dang_nhap.php");
    }
?>
</body>

</html>