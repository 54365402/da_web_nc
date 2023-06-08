

<!DOCTYPE html>
<html lang="en">
<?php
include "header.php";
?>
<?php 
<<<<<<< HEAD
    //Start the session
    if($_SESSION['login'])
    {
=======
    // // Start the session
    // if($_SESSION['login'] && $_SESSION['chuc_vu']=="Quản lý")
    // {
?>

<?php
include_once "../../controller/connection.php";
>>>>>>> b8e24b0632e255988a142b2dadba19807944b2d8
?>
<?php
    //require "../../controller/controller_notice/PriceDisplay.php"
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/noticeANDprice.css">
    <link rel="stylesheet" href="../assets/css/hoivien.css">
    <link rel="stylesheet" href="../assets/css/home.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-free-6.4.0-web/css/all.min.css">
</head>

<body>

    <?php
         $sql = "SELECT * FROM tbl_lop";
         $result = $mysqli->query($sql);
         if ($result->num_rows > 0) {
            // output data of each row
            $doanh_thu = array();
            while($row = $result->fetch_assoc()) {
                 $doanh_thu[] = $row["doanh_thu"];           

            }
          } else {
            echo "0 results";
          }
        ?>
    <?php
$mysqli -> close();
?>


    <div class="tab-bar" style="top: 20px; bottom:20px;">
<<<<<<< HEAD
        <a href="thongke_doanhthu.php" class="fix tab-button active">Thông báo</a>
        <a href="tk_lop.php" class="tab-button">Lớp và gói tập</a>
        <a href="tk_nuoc.php" class="tab-button">Nước và thực phẩm</a>
        <a href="tk_do_tuoi.php" class="tab-button">Độ tuổi hội viên</a>
    </div> 
=======
        <button class="fix tab-button active-fix">Doanh thu</button>
        <button class="tab-button" >Nhườn</button>
        <button class="tab-button">Nước và thực phẩm</button>
        <button class="tab-button">Độ tuổi hội viên</button>

    </div>
>>>>>>> b8e24b0632e255988a142b2dadba19807944b2d8

    <div class="tab-content">
        <div class="tab-pane active-fix">



            <div class="chart-container" style="left:50px; top:50px; position: relative; height:60vh; width:80%">
                <canvas id="myChart"></canvas>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
            //Set up block
            //console.log(<?php //echo json_encode($doanh_thu); ?>)

<<<<<<< HEAD
            const doanh_thu = <?php echo json_encode($doanh_thu); ?>;

            const data = {
                labels: ['Gym', 'Yoga', 'Aerobic', 'Boxing', 'Swimming'],
                datasets: [{
                    label: '# of Votes',
                    data: doanh_thu,
                    borderWidth: 1
                }]
            };
=======
          const data = {
        labels: ['Gym', 'Yoga', 'Aerobic', 'Boxing', 'Swimming'],
                    datasets: [{
                      label: '# of Votes',
                      data: doanh_thu,
                      borderWidth: 1
                    }]
                  };
        //config
        const config = {
>>>>>>> 229b2c6ac2c6015ed57bef833d7b1ed508fc10e3

            //config
            const config = {

                type: 'line',
                data,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }

            };
            //render
            const myChart = new Chart(
                document.getElementById('myChart'),
                config
<<<<<<< HEAD
            );
            </script>

        </div>
        <div class=" tab-pane " style="top 20px">

            <?php
              //include "tk_do_tuoi.php";
              ?>
        </div>
    </div>






=======
              );
                </script>

            </div>
            <div class=" tab-pane ">
              
            </div>
        </div>
>>>>>>> 229b2c6ac2c6015ed57bef833d7b1ed508fc10e3
</body>

</html>

<?php 
    // }
    // else{
    //     header("Location: ../views_ktc/dang_nhap.php");
    // }
?>


<script>
const tabButtons = document.querySelectorAll('.tab-button');
const tabPanes = document.querySelectorAll('.tab-pane');

tabButtons.forEach((button, index) => {
    button.addEventListener('click', () => {
        tabButtons.forEach(button => button.classList.remove('active-fix'));
        tabPanes.forEach(pane => pane.classList.remove('active-fix'));

        button.classList.add('active-fix');
        tabPanes[index].classList.add('active-fix');
    });
});
</script>

<<<<<<< HEAD
<?php 
    // }
    // else{
    //     header("Location: dang_nhap.php");
    // }
?>
=======


>>>>>>> 229b2c6ac2c6015ed57bef833d7b1ed508fc10e3
