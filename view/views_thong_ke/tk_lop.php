    <?php
        include_once "header.php";
    ?>

   <?php
    // Kết nối CSDL và lấy dữ liệu thống kê
    include_once "../../controller/connection.php";

    // Truy vấn CSDL để lấy tổng total_money của mỗi package
    $sqlPackages = "SELECT packages, SUM(total_money) AS total FROM card GROUP BY packages";
    $resultPackages = mysqli_query($mysqli, $sqlPackages);

    // Khởi tạo mảng dữ liệu cho biểu đồ theo packages và total_money
    $dataPackages = array();
    $dataTotalMoney = array();
    while ($row = mysqli_fetch_assoc($resultPackages)) {
        $packages = $row['packages'];
        $totalMoney = $row['total'];
        $dataPackages[] = $packages;
        $dataTotalMoney[] = $totalMoney;
    }

    // Truy vấn CSDL để lấy tổng total_money của mỗi types_room
    $sqlTypesRoom = "SELECT types_room, SUM(total_money) AS total FROM card GROUP BY types_room";
    $resultTypesRoom = mysqli_query($mysqli, $sqlTypesRoom);

    // Khởi tạo mảng dữ liệu cho biểu đồ theo types_room và total_money
    $dataTypesRoom = array();
    $dataTotal = array();
    while ($row = mysqli_fetch_assoc($resultTypesRoom)) {
        $typesRoom = $row['types_room'];
        $total = $row['total'];
        $dataTypesRoom[] = $typesRoom;
        $dataTotal[] = $total;
    }

    // Đóng kết nối CSDL
    $mysqli->close();
    ?>

    <!DOCTYPE html>
    <html>
        <head>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <style>
                canvas {
                    max-width: 100%;
                    height: auto;
                }
                .tk_lop_hien_thi {
                    margin-top: 100px;
                    display: flex;
                    justify-content: space-between;
                }

                .tk_types_room {
                    text-align: left;
                }

                .tk_packages {
                    text-align: right;
                }
            </style>
        </head>
    <body>
        <div class ="tk_lop_hien_thi">
            <div style="width: 500px; margin: 0 auto;">
                <canvas id="tk_types_room"></canvas>
            </div>

            <div style="width: 500px; margin: 0 auto;">
                <canvas id="tk_packages"></canvas>
            </div>
        </div>        
        <script>
            // Dữ liệu biểu đồ theo types_room và total
            var dataTypesRoom = <?php echo json_encode($dataTypesRoom); ?>;
            var dataTotal = <?php echo json_encode($dataTotal); ?>;

            // Vẽ biểu đồ ngũ giác cho types_room và total
            var tk_types_room_hien_thi = document.getElementById('tk_types_room').getContext('2d');
            new Chart(tk_types_room_hien_thi, {
                type: 'radar',
                data: {
                    labels: dataTypesRoom,
                    datasets: [{
                        backgroundColor: 'rgba(192, 75, 75, 0.5)',
                        borderColor: 'rgba(192, 75, 75, 1)',
                        borderWidth: 1,
                        data: dataTotal
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scale: {
                        ticks: {
                            beginAtZero: true,
                            display: false
                        },
                        gridLines: {
                            display: false
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });
            
            // Dữ liệu biểu đồ theo packages và total_money
            var dataPackages = <?php echo json_encode($dataPackages); ?>;
            var dataTotalMoney = <?php echo json_encode($dataTotalMoney); ?>;

            // Vẽ biểu đồ ngũ giác cho packages và total_money
            var tk_packages_hien_thi = document.getElementById('tk_packages').getContext('2d');
            new Chart(tk_packages_hien_thi, {
                type: 'radar',
                data: {
                    labels: dataPackages,
                    datasets: [{
                        backgroundColor: 'rgba(75, 192, 192, 0.5)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1,
                        data: dataTotalMoney
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scale: {
                        ticks: {
                            beginAtZero: true,
                            display: false
                        },
                        gridLines: {
                            display: false
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });

        </script>
    </body>
    </html>
