<?php
include_once "header.php";
?>
<?php
    // Kết nối CSDL và lấy dữ liệu thống kê
    include_once "../../controller/connection.php";

    // Lấy dữ liệu từ CSDL
    $sql = "SELECT
        CASE
            WHEN h.tuoi BETWEEN 0 AND 15 THEN '0-15'
            WHEN h.tuoi BETWEEN 16 AND 18 THEN '16-18'
            WHEN h.tuoi BETWEEN 19 AND 22 THEN '19-22'
            WHEN h.tuoi BETWEEN 23 AND 25 THEN '23-25'
            WHEN h.tuoi BETWEEN 26 AND 29 THEN '26-29'
            WHEN h.tuoi BETWEEN 30 AND 35 THEN '30-35'
            WHEN h.tuoi BETWEEN 36 AND 40 THEN '36-40'
            WHEN h.tuoi BETWEEN 41 AND 45 THEN '41-45'
            WHEN h.tuoi BETWEEN 46 AND 50 THEN '46-50'
            WHEN h.tuoi BETWEEN 51 AND 55 THEN '51-55'
            WHEN h.tuoi BETWEEN 56 AND 60 THEN '56-60'
            ELSE '60+'
        END AS age_group,
        SUM(c.total_money) AS total_amount FROM tbl_hoi_vien h INNER JOIN card c ON h.id_hv = c.id_hv GROUP BY age_group";
    $query = mysqli_query($mysqli, $sql);

    // Tạo mảng dữ liệu cho biểu đồ
    $data = array();
    $ageCategories = array();
    while ($row = mysqli_fetch_assoc($query)) {
        $ageGroup = $row['age_group'];
        $totalAmount = (float)$row['total_amount'];
        $data[] = $totalAmount;
        $ageCategories[] = $ageGroup;
    }

    // Sắp xếp lại các đoạn độ tuổi từ bé đến lớn
    sort($ageCategories);

    // Đóng kết nối CSDL
    $mysqli->close();
?>


<!DOCTYPE html>
<html>
<head>
    <style>
        .tkdt_hien_thi {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            height: 80vh;
        }

        .tkdt_hien_thi #chart {
            width: 80%;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.26.0/dist/apexcharts.min.js"></script>
</head>
<body>
    <div class="tkdt_hien_thi">
        <div id="chart"></div>
    </div>

    <script>
        // Khởi tạo biểu đồ cột
        var options = {
            series: [{
                name: 'Doanh thu',
                data: <?php echo json_encode($data); ?>
            }],
            chart: {
                type: 'bar',
                height: '90%',
                width: '90%', 
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    dataLabels: {
                        position: 'top',
                    },
                    colors: {
                        ranges: [
                            { from: 0, to: 49999, color: '#4472C8' },
                            { from: 50000, to: 99999, color: '#4472C8' },
                            { from: 100000, to: 199999, color: '#4472C8' },
                            { from: 200000, to: 499999, color: '#4472C8' },
                            { from: 500000, to: 999999, color: '#4472C8' },
                            { from: 1000000, to: Infinity, color: '#4472C8' }
                        ]
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
            xaxis: {
                categories: <?php echo json_encode($ageCategories); ?>,
                title: {
                    text: 'Độ tuổi',
                    offsetX: 10,
                    offsetY: 0, 
                    style: {
                        fontSize: '14px',
                        fontWeight: 'bold'
                    }
                },
                labels: {
                    style: {
                        fontSize: '14px'
                    }
                },
                
            },

        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>
</body>
</html>
