<?php 
    // Start the session
<<<<<<< HEAD
    session_start();   

    include_once "../../controller/connection.php";
    
    $sql = "SELECT * FROM account where username ='".$_SESSION['user']."'";
    $query = mysqli_query($mysqli,$sql);

while($row = mysqli_fetch_array($query))
{
    $_SESSION['chuc_vu']=$row['chuc_vu'];
    $_SESSION['name']=$row['name'];

}
=======
//     session_start();   

//     include_once "../../../controller/connection.php";
    
//     $sql = "SELECT * FROM account where username ='".$_SESSION['user']."'";
//     $query = mysqli_query($mysqli,$sql);

// while($row = mysqli_fetch_array($query))
// {
//     $_SESSION['chuc_vu']=$row['chuc_vu'];
//     $_SESSION['name']=$row['name'];

// }
>>>>>>> c885b8e4ab679ee4580691271f46b2581e93cfa5
?>
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-free-6.4.0-web/css/all.min.css">
    <title>GYM HUCE N6 PM1</title>
</head>

<body>

    <div id="main">
        <div id="header">
            <div class="information">
                <div class="logo">
                    <img src="../assets/img/logo.png" alt="LOGO">
                </div>
                <div class="logout">
                        <li><a href=""><i class="fa-solid fa-envelope"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-square-instagram"></i></i></a></li>
                        <li><a class="hotline" href=""><i class="fa-solid fa-headset"></i> Hotline: 0123456789</a></li>
<<<<<<< HEAD
                        <li><a href="noticeANDprice.php"><i class="fa-solid fa-circle-info"></i></a></li>
=======
                        <li><a href="../views_home/noticeANDprice.php"><i class="fa-solid fa-circle-info"></i></a></li>
>>>>>>> c885b8e4ab679ee4580691271f46b2581e93cfa5
                        <li><a href=""><i class="fa-solid fa-gear"></i></a></li>
                        <li><a href="khach_trang_chu.php"><i class="fa-solid fa-right-from-bracket"></i></a></li>
                </div>
            </div>



            <?php
<<<<<<< HEAD
                if ($_SESSION['chuc_vu'] == "Quản lý")
                {
            ?>

            <div class="menu">
                <li class="menu-li"><a class="menu-a" href="home.php"><i class="fa-solid fa-house-user"></i> Trang chủ</a></li>
                <li class="menu-li"><a class="menu-a" href="hoivien.php"><i class="fa-solid fa-person"></i> Hội viên</a></li>
                <li class="menu-li"><a class="menu-a" href="../views_the/the.php"><i class="fa-solid fa-address-card"></i> Thẻ</a></li>
                <li class="menu-li menu-li-nuoc"><a class="menu-a" href="../views_nuoc_va_thuc_pham/views_nuoc/nuoc.php"><i class="fa-solid fa-bottle-water"></i> Nước và thực phẩm</a></li>
                <li class="menu-li "><a class="menu-a" href="../views_nhan_vien/nv_ptd/lop.php"><i class="fa-solid fa-people-roof"></i> Nhân viên</a></li>
                <li class="menu-li menu-li-csvc"><a class="menu-a" href="dung_cu_tap.php"><i class="fa-solid fa-database"></i> Cơ sở vật chất</a></li>
                <li class="menu-li"><a class="menu-a" href="su_kien.php"><i class="fa-solid fa-calendar-days"></i> Sự kiện</a></li>
                <li class="menu-li"><a class="menu-a" href="tk_nuoc.php"><i class="fa-sharp fa-solid fa-money-check"></i> Thống
=======
                // if ($_SESSION['chuc_vu'] == "Quản lý")
                // {
            ?>

            <div class="menu">
                <li class="menu-li"><a class="menu-a" href="../views_home/home.php"><i class="fa-solid fa-house-user"></i> Trang chủ</a></li>
                <li class="menu-li"><a class="menu-a" href="hoivien.php"><i class="fa-solid fa-person"></i> Hội viên</a></li>
                <li class="menu-li"><a class="menu-a" href="the.php"><i class="fa-solid fa-address-card"></i> Thẻ</a></li>
                <li class="menu-li menu-li-nuoc"><a class="menu-a" href="views_nuoc_va_thuc_pham/views_nuoc/nuoc.php"><i class="fa-solid fa-bottle-water"></i> Nước và thực phẩm</a></li>
                <li class="menu-li "><a class="menu-a" href="../views_nhan_vien/nhanvien.php"><i class="fa-solid fa-people-roof"></i> Nhân viên</a></li>
                <li class="menu-li menu-li-csvc"><a class="menu-a" href="../../views_csvc/dung_cu_tap/dung_cu_tap.php"><i class="fa-solid fa-database"></i> Cơ sở vật chất</a></li>
                <li class="menu-li"><a class="menu-a" href=""><i class="fa-solid fa-calendar-days"></i> Sự kiện</a></li>
                <li class="menu-li"><a class="menu-a" href="../views_thong_ke/thongke_doanhthu.php"><i class="fa-sharp fa-solid fa-money-check"></i> Thống
>>>>>>> c885b8e4ab679ee4580691271f46b2581e93cfa5
                        kê</a></li>

            </div>

            <?php
<<<<<<< HEAD
                }
                    else if ( $_SESSION['login'] == true && $_SESSION['chuc_vu'] == "Hội viên")
                    {
                        ?>

=======
                // }
                //     else if ( $_SESSION['login'] == true && $_SESSION['chuc_vu'] == "Hội viên")
                //     {
                        ?>
<!-- 
>>>>>>> c885b8e4ab679ee4580691271f46b2581e93cfa5
            <div class="menu" style="justify-content: space-around;">

                <li class="menu-li"><a class="menu-a" href=""><i class="fa-solid fa-people-roof"></i> Nhân viên</a></li>

                <li class="menu-li"><a class="menu-a" href=""><i class="fa-solid fa-calendar-days"></i> Sự kiện</a></li>


<<<<<<< HEAD
            </div>

            <?php
                    }
=======
            </div> -->

            <?php
                    // }
>>>>>>> c885b8e4ab679ee4580691271f46b2581e93cfa5
                    
                
                ?>

        </div>