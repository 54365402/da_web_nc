<?php
include_once "header.php";
?>

<?php 
    // Start the session
    if($_SESSION['login'] && $_SESSION['chuc_vu']=="Quản lý")
    {
?>

<link rel="stylesheet" href="./assets/css/class.css">

<!-- them--popup -->

 <!-- <?php include_once "view_class_popup.php"
?>  -->


<!-- Hiển thị -->
<?php
    include_once "../controller/controller_nhan_vien/phuong_thuc_day/class_hien_thi.php";
?>

<div class='clear'></div>

<!-- tạo chỉ mục trang -->
<form class="class_form-page" method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <center>
        <?php
    echo $listPages;
    ?>
    </center>
</form>

<script src="../controller/controller_nhan_vien/phuong_thuc_day/class_add.js">
</script>

<script src="../controller/controller_nhan_vien/phuong_thuc_day/class_delete_update.js"></script>
<?php 
    }
    else{
        header("Location: dang_nhap.php");
    }
?>
</body>

</html>