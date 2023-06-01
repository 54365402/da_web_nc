<?php
// Kết nối CSDL và lấy dữ liệu thống kê
include_once "../controller/connection.php";

// Truy vấn CSDL để lấy dữ liệu từ bảng card
$sql = "SELECT types_room FROM card";
$result = mysqli_query($mysqli, $sql);

// Khởi tạo mảng dữ liệu cho biểu đồ theo types_room
$dataTypesRoom = array();
while ($row = mysqli_fetch_assoc($result)) {
    $typesRoom = $row['types_room'];
    $dataTypesRoom[] = $typesRoom;
}

// Truy vấn CSDL để lấy dữ liệu từ bảng card
$sql = "SELECT packages FROM card";
$result = mysqli_query($mysqli, $sql);

// Khởi tạo mảng dữ liệu cho biểu đồ theo packages
$dataPackages = array();
while ($row = mysqli_fetch_assoc($result)) {
    $packages = $row['packages'];
    $dataPackages[] = $packages;
}

// Đóng kết nối CSDL
$mysqli->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Biểu đồ types_room</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        canvas {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div style="width: 500px; margin: 0 auto;">
        <canvas id="typesRoomChart"></canvas>
    </div>

    <script>
        // Dữ liệu biểu đồ theo types_room
        var dataTypesRoom = <?php echo json_encode($dataTypesRoom); ?>;

        // Vẽ biểu đồ theo types_room
        var typesRoomCtx = document.getElementById('typesRoomChart').getContext('2d');
        new Chart(typesRoomCtx, {
            type: 'radar',
            data: {
                labels: dataTypesRoom,
                datasets: [{
                    backgroundColor: 'rgba(75, 192, 192, 0.5)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1,
                    data: Array(dataTypesRoom.length).fill(1)
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
<!DOCTYPE html>
<html>
<head>
    <title>Biểu đồ packages</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        canvas {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div style="width: 500px; margin: 0 auto;">
        <canvas id="packagesChart"></canvas>
    </div>

    <script>
        // Dữ liệu biểu đồ theo packages
        var dataPackages = <?php echo json_encode($dataPackages); ?>;

        // Vẽ biểu đồ theo packages
        var packagesCtx = document.getElementById('packagesChart').getContext('2d');
        new Chart(packagesCtx, {
            type: 'radar',
            data: {
                labels: dataPackages,
                datasets: [{
                    backgroundColor: 'rgba(192, 75, 75, 0.5)',
                    borderColor: 'rgba(192, 75, 75, 1)',
                    borderWidth: 1,
                    data: Array(dataPackages.length).fill(1)
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
