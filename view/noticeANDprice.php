<!DOCTYPE html>
<html lang="en">

<?php
    require "../controller/controller_notice/PriceDisplay.php"
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/noticeANDprice.css">
    <link rel="stylesheet" href="./assets/css/hoivien.css">
    <link rel="stylesheet" href="./assets/css/home.css">
</head>

<body>

    <div class="tab-bar">
        <button class="fix tab-button active">Thông báo</button>
        <button class="tab-button">Giá cả</button>

    </div>

    <div class="tab-content">
        <div class="tab-pane active">

            <div class="notice__border">
                <div class="notice__table notice__text notice__table--scroll">
                    <h2>Thông báo! </h2>
                    <?php
                        include_once "../controller/controller_notice/NoticeDisplay.php"
                    ?>

                </div>

                <form method="POST" action="../controller/controller_notice/NoticeAdd.php">

                    <div class="notice__table notice__table--insert notice__text">
                        <textarea name="content" id=""
                            style="width: 75vh; height: 99.5%; background-color: #d3cff1;"></textarea>
                    </div>

                    <div class="hoivien__AFD">
                        <button class='notice__btn' type="submit" onclick="">Thêm</button>
                        <button class='notice__btn notice__btn-del' type="submit" onclick="">Xóa</button>
                    </div>

                </form>

            </div>
        </div>
        
        <div class=" tab-pane">
        <?php
        // Duyệt qua các phẩn từ trong bảng
        while($row = mysqli_fetch_array($query))
       {
        ?>
        
            <div class="notice__border">
                <table class="price__table price__text">
                    <tr>
                        <th><h1>Gym</h1></th>
                    </tr>
                    <tr class="p">
                        <th>1 lần: <?php echo $row['1_lan'] ?></th>
                    </tr>
                    <tr class="p">
                        <th>1 tháng: <?php echo $row['1_thang']  ?> </th>
                    </tr>
                    <tr class="p">
                        <th>3 tháng: <?php echo $row['3_thang'] ?> </th>
                    </tr>
                    <tr class="p">
                        <th>6 tháng: <?php echo $row['6_thang'] ?>  </th>
                    </tr>
                    <tr class="p">
                        <th>1 năm: <?php echo $row['1_nam'] ?>  </th>
                    </tr>
                    <tr class="p">
                        <th>2 năm: <?php echo $row['2_nam'] ?>  </th>
                    </tr>
                    <tr class="p">
                        <th>5 năm: <?php echo $row['5_nam'] ?>  </th>
                    </tr>
                    <tr class="p">
                        <th>Huấn luyện viên riêng: <?php echo $row['gym_rieng'] ?> </th>
                    </tr>
                    <tr class="p">
                        <th></th>
                    </tr>
                </table>

                <table class="price__table price__text">
                    <tr>
                        <th><h1>Yoga</h1></th>
                    </tr>
                    <tr class="p">
                        <th>Lớp basic: <?php echo $row['yoga_basic'] ?></th>
                    </tr>
                    <tr class="p">
                        <th>Lớp average: <?php echo $row['yoga_average'] ?> </th>
                    </tr>
                    <tr class="p">
                        <th>Lớp Advance: <?php echo $row['yoga_advance'] ?> </th>
                    </tr>
                    <tr class="p">
                        <th>Kèm riêng: <?php echo $row['yoga_rieng'] ?>  </th>
                    </tr>
                </table>

                <table class="price__table price__text">
                    <tr>
                        <th><h1>Aerobic</h1></th>
                    </tr>
                    <tr class="p">
                        <th>Lớp basic: <?php echo $row['aerobic_basic'] ?></th>
                    </tr>
                    <tr class="p">
                        <th>Lớp average: <?php echo $row['aerobic_average'] ?> </th>
                    </tr>
                    <tr class="p">
                        <th>Lớp Advance: <?php echo $row['aerobic_advance'] ?> </th>
                    </tr>
                    <tr class="p">
                        <th>Kèm riêng: <?php echo $row['aerobic_rieng'] ?>  </th>
                    </tr>
                </table>

                <table class="price__table price__text">
                    <tr>
                        <th><h1>Boxing</h1></th>
                    </tr>
                    <tr class="p">
                        <th>Lớp basic: <?php echo $row['boxing_basic'] ?></th>
                    </tr>
                    <tr class="p">
                        <th>Lớp average: <?php echo $row['boxing_average'] ?> </th>
                    </tr>
                    <tr class="p">
                        <th>Lớp Advance: <?php echo $row['boxing_advance'] ?> </th>
                    </tr>
                    <tr class="p">
                        <th>Kèm riêng: <?php echo $row['boxing_rieng'] ?>  </th>
                    </tr>
                </table>

                <table class="price__table price__text">
                    <tr>
                        <th><h1>Swimming</h1></th>
                    </tr>
                    <tr class="p">
                        <th>Lớp basic: <?php echo $row['swimming_basic'] ?></th>
                    </tr>
                    <tr class="p">
                        <th>Lớp average: <?php echo $row['swimming_average'] ?> </th>
                    </tr>
                    <tr class="p">
                        <th>Lớp Advance: <?php echo $row['swimming_advance'] ?> </th>
                    </tr>
                    <tr class="p">
                        <th>Kèm riêng: <?php echo $row['swimming_rieng'] ?>  </th>
                    </tr>
                </table>
                <div class="hoivien__AFD">
                        <button class='notice__btn js-update' type="button" onclick="">Sửa</button>
                </div>
            </div>
                <?php
       }
        ?>
        </div>
        
    </div>

    

</body>

</html>




<script>
const tabButtons = document.querySelectorAll('.tab-button');
const tabPanes = document.querySelectorAll('.tab-pane');

tabButtons.forEach((button, index) => {
    button.addEventListener('click', () => {
        tabButtons.forEach(button => button.classList.remove('active'));
        tabPanes.forEach(pane => pane.classList.remove('active'));

        button.classList.add('active');
        tabPanes[index].classList.add('active');
    });
});
</script>

<script src="../controller/controller_notice/PriceUpdate.js"></script>