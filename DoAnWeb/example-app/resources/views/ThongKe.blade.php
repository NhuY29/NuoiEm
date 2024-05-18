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
            title: 'Thống Kê Số Tiền Các Bé Đã Được Nhận',
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
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        #piechart {
            width: 1000px;
            height: 800px;
        }
        form {
            margin-bottom: 20px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: row; /* Đặt các phần tử nằm ngang */
            align-items: center;
            gap: 10px; /* Khoảng cách giữa các phần tử */
        }
        form label {
            margin-right: 10px;
            font-weight: bold;
        }
        form input[type="date"] {
            
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        form button {
            padding: 10px 20px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        form button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="GET" action="{{ route('ThongKe.index') }}">
            <label for="start_date">Từ ngày:</label>
            <input type="date" id="start_date" name="start_date" value="{{ request('start_date') }}">
            <label for="end_date">Đến ngày:</label>
            <input type="date" id="end_date" name="end_date" value="{{ request('end_date') }}">
            <button type="submit">Thống Kê</button>
        </form>
        <div id="piechart"></div>
    </div>
</body>
</html>
