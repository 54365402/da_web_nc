<?php
include_once "header.php";
?>
<?php 
    // Start the session
    if($_SESSION['login'] && $_SESSION['chuc_vu']=="Quản lý")
    {
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        .tktp_hien_thi {
            display: flex;
            justify-content: center;
            text-align: center;
            align-items: center;
            height: 70vh;
            margin: 0 auto;
        }
        .tktp_hien_thi #chart {
            width: 80%;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.26.0/dist/apexcharts.min.js"></script>
</head>
<body>
<?php
    // Kết nối CSDL và lấy dữ liệu thống kê
    include_once "../../controller/connection.php";


    // Lấy dữ liệu từ CSDL
    $sql = "SELECT name, SUM(tong_tien) AS total_amount FROM tbl_nuoc_va_thuc_pham WHERE loai_tp = 'Thực phẩm' GROUP BY name";
    $query = mysqli_query($mysqli,$sql);

    // Tạo mảng dữ liệu cho biểu đồ
    $data = array();
    while ($row = mysqli_fetch_assoc($query)) {
        $name = $row['name'];
        $totalAmount = (float)$row['total_amount'];
        $data[] = array(
            'name' => $name,
            'data' => array($totalAmount),
            'color' => '#4472C8'
        );
    }

    // Đóng kết nối CSDL
    $mysqli->close();
?>

    <div class="tk_nuoc_va_thuc_pham_hien_thi">
        <div class='tktp' name='tkpt'>
            <button onclick="window.location.href='../view/tk_nuoc.php'">Nước</button>
            <button onclick="window.location.href='../view/tk_thuc_pham.php'">Thực phẩm</button>
        </div>
    </div>

    <div class="tktp_hien_thi">
        <div id="chart"></div>
    </div>

    <script>
        // Khởi tạo biểu đồ cột
        var options = {
            series: <?php echo json_encode($data); ?>,
            chart: {
                type: 'bar',
                height: '100%'
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    dataLabels: {
                        position: 'top'
                    }
                }
            },
            dataLabels: {
                enabled: true,
                formatter: function (val) {
                    if (val >= 1000000) {
                        return (val / 1000000).toFixed(1) + 'tr';
                    } else if (val >= 1000) {
                        return (val / 1000).toFixed(1) + 'k';
                    } else {
                        return val;
                    }
                },
                offsetY: -20,
                style: {
                    fontSize: '14px',
                    colors: ["#304758"]
                }
            },
            xaxis: {
                categories: ['Thực phẩm']
            
            },
            yaxis: {
                title: {
                    text: 'Doanh thu',
                    offsetX: 0,
                    offsetY: -10,
                    style: {
                        fontSize: '14px',
                            fontWeight: 'bold',
                            fontFamily: 'Arial',
                        color: '#333'
                    }
                }
            },
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>


</body>
</html>
    <?php 
        } else {
            header("Location: dang_nhap.php");
        }
    ?>
