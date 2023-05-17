<?php
include_once "header.php";
?>

<?php

    if($_SESSION['login'])
    {

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
<?php

include_once "../controller/connection.php";
    
    $sql = "SELECT * FROM account";
    $query = mysqli_query($mysqli,$sql);

while($row = mysqli_fetch_array($query))
{
    $_SESSION['chuc_vu']=$row['chuc_vu'];
    $_SESSION['name']=$row['name'];

}
?>
    <div class="card card--info">
    <img src="./assets/img/avatar.png" alt="">
        <table class="info--text">
            <tr class ="a">
                <th>Chức vụ: <?php echo  $_SESSION['chuc_vu']?></th>
            </tr>
            <tr class ="a">
                <th>Họ tên: <?php echo  $_SESSION['name']?> </th>
            </tr>
            <tr class ="a">
                <th>Tài khoản: <?php echo  $_SESSION['user']?> </th>
            </tr>
            <tr class ="a">
                <th>Mật khẩu: <?php echo  $_SESSION['pass']?>  </th>
            </tr>

        </table>
        <button class="card--btn js-update" type="button" onclick="">
            Sửa thông tin cá nhân
        </button>
    </div>
    <div class=" card card--notice">
        <div >
        <h1> Thông báo </h1>
        </div>
        <br>
        <div class="notice__text">
            <?php
                        include_once "../controller/controller_notice/NoticeDisplay.php"
                    ?>
        </div>
    </div>


<?php

    }
    else{
        header("Locaction: dang_nhap.php");
    }

?>

</body>

</html>

<script src="../controller/controller_notice/InfoUpdate.js"></script>
