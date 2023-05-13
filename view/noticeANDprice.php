<!DOCTYPE html>
<html lang="en">

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
            <div class="notice__border">
                như cứa
            </div>
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