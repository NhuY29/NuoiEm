<!DOCTYPE html>
<html>
<head>
    <title>ThongKe Chart</title>
    <!-- Load the Google Charts library -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'TreEm');
        data.addColumn('number', 'TongTien');

        // Parse JSON data
        var jsonData = <?php echo $data; ?>;
        for (var i = 0; i < jsonData.length; i++) {
            data.addRow([jsonData[i][0], parseFloat(jsonData[i][1])]);
        }

        var options = {
            title: 'ThongKe',
            legend: { position: 'bottom' }
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }
    </script>
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        #piechart {
            width: 1000px;
            height: 800px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div id="piechart"></div>
    </div>
</body>
</html>
