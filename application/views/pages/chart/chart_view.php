<!DOCTYPE html>
<html>

<head>
    <title>Chart Example</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <canvas id="myChart" width="400" height="400"></canvas>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var chartData = <?php echo json_encode($chart_data); ?>;

        var labels = [];
        var values = [];

        // Mengambil data dari PHP dan memasukkan ke dalam array untuk digunakan oleh Chart.js
        chartData.forEach(function(item) {
            labels.push(item.label);
            values.push(item.value);
        });

        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Data Chart',
                    data: values,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

</html>