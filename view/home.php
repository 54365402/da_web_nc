<?php
include_once "header.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/home.css">
</head>

<body>

    <div class="card card--info">
        <img src="./assets/img/avatar.png" alt="">
        <h1>Chức vụ: Quản lý</h1>
        <h1> Họ tên:</h1>
        <h1>Tài khoản: </h1>
        <h1>Mật khẩu: </h1>
        <button class="card--btn">
            Sửa thông tin cá nhân
        </button>
    </div>
    <div class=" card card--notice">
        <h1> Thông báo </h1>
        <br>
        <div class="notice__text">
            <?php
                        include_once "../controller/controller_notice/NoticeDisplay.php"
                    ?>
        </div>
    </div>


</body>

</html>