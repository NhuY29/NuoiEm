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
            data.addRow([jsonData[i][0].toString(), parseFloat(jsonData[i][1])]); // Chuyển đổi sang chuỗi
        }

        var options = {
            title: 'ThongKe'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }
</script>



</head>
<body>
    <!-- Container to hold the pie chart -->
    <div id="piechart" style="width: 900px; height: 500px;"></div>
</body>
</html>
