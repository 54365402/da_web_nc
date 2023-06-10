<?php
include_once "header.php";
?>
<?php 
    // Start the session
    if($_SESSION['login'] && $_SESSION['chuc_vu']=="Quản lý")
    {
?>
<?php

include_once "../../controller/connection.php";
    
    $sql = "SELECT * FROM account where username ='".$_SESSION['user']."'";
    $query = mysqli_query($mysqli,$sql);

while($row = mysqli_fetch_array($query))
{
    $_SESSION['chuc_vu']=$row['chuc_vu'];
    $_SESSION['name']=$row['name'];
    $_SESSION['id'] = $row['id'];
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/home.css">
</head>

<body>

    <div class="card card--info">
    <img src="../assets/img/avatar.png" alt="">
        <table class="info--text">
            <tr class ="a">
                <th>Chức vụ: <?php echo  $_SESSION['chuc_vu']?> </th>
            
            <tr class ="a">
                <th>Họ tên: <?php echo  $_SESSION['name']?> </th>
            </tr>
            <tr class ="a">
                <th>Tài khoản:  <?php echo  $_SESSION['user']?> </th>
            </tr>
            <tr class ="a">
                <th>Mật khẩu:  <?php echo  $_SESSION['pass']?>  </th>
            </tr>

        </table>
        <button class="card--btn js-update" type="button" onclick="">
            Sửa thông tin cá nhân
        </button>
    </div>
    <script src="../assets/js/js_notice/InfoUpdate.js"></script>
    <div class=" card card--notice">
        <div >
        <h1> Thông báo </h1>
        </div>
        <br>
        <div class="notice__text">
        <?php
            include_once "../../controller/connection.php";
        ?>

        <?php
            $sql = "SELECT notice FROM tbl_notice WHERE status=1 ORDER BY addAt";
            $result = $mysqli->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
        ?>
                <tr>
                <td><?php echo "- " . $row["notice"]; ?></td>
                <td style="text-align: right;">
                
                </td>
                <?php echo "<br>"; ?>
                </tr>           
        <?php

            }
          } else {
            echo "0 results";
          }
        ?>    


            <?php
            $mysqli -> close();
            ?>
        </div>
    </div>


    <?php 
    }
    else{
        header("Location: ../views_ktc/dang_nhap.php");
    }
?>

</body>

</html>

