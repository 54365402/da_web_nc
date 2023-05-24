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
</div>
<!-- Hiển thị -->
<?php
    include_once "../controller/controller_su_kien/sinh_nhat_hoi_vien/snhv_hien_thi.php";
?>

<div class='clear'></div>

<!-- tạo chỉ mục trang -->



<script src="../controller/controller_su_kien/sinh_nhat_hoi_vien/snhv_update.js"></script>
<?php 
    }
    else{
        header("Location: dang_nhap.php");
    }
?>
</body>

</html>