<!DOCTYPE html>
<html>
<head>
    <title>Biểu đồ ngũ giác</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="hexagonChart"></canvas>
    <script>
        // Dữ liệu cho biểu đồ
        var data = {
            labels: ['A', 'B', 'C', 'D', 'E'],
            datasets: [{
                label: 'Dữ liệu',
                data: [10, 20, 15, 25, 30],
                backgroundColor: 'rgba(75, 192, 192, 0.5)', // Màu nền
                borderColor: 'rgba(75, 192, 192, 1)', // Màu viền
                borderWidth: 1
            }]
        };

        // Tùy chọn cho biểu đồ
        var options = {
            responsive: true,
            maintainAspectRatio: false,
            scale: {
                ticks: {
                    beginAtZero: true,
                    min: 0,
                    max: 50,
                    stepSize: 10
                }
            }
        };

        // Vẽ biểu đồ ngũ giác
        var ctx = document.getElementById('hexagonChart').getContext('2d');
        new Chart(ctx, {
            type: 'radar',
            data: data,
            options: options
        });
    </script>
</body>
</html>
