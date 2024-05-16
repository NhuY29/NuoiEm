<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thống Kê Biểu Đồ</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script>
       $( function() {
            $( "#datepicker, #datepicker2" ).datepicker({
                dateFormat: 'yy/mm/dd'
            });

            // Hàm xử lý khi nhấn nút "loc ket qua"
            $("#btn-dashboard-fillter").on("click", function() {
                var _token = $('input[name="_token"]').val();
                var tuNgay = $("#datepicker").val();
                var denNgay = $("#datepicker2").val();
                console.log("Data before sending:", tuNgay, denNgay); // Kiểm tra dữ liệu trước khi gửi request
                $.ajax({
    url: "/ThongKe",
    method: "GET",
    dataType: "JSON",
    data: {
        tuNgay: tuNgay,
        denNgay: denNgay,
    },
    success: function(data) {
        console.log("Data received:", data);
        // ...
    },
    error: function(xhr, status, error) {
        console.error("AJAX request error:", xhr.responseText, status, error);
    }
});
            });
        });$(document).ready(function() {
    var chart = new Morris.Bar({
        element: 'myfirstchart',
        lineColor: ['#819C79','#fc8710'],
        data: [],
        hideHover: 'auto',
        parseTime: false,
        xkey: 'period',
        ykeys: ['licensed'],
        labels: ['Số tiền']
    });
});

    </script>
</head>
<body>
    <div class="row">
        <p class="title_thongke">Thong Ke </p>
        <form method="get" action="/ThongKe" autocomplete="off">
        @csrf  <div class="col-md-2">
        <p>Tu Ngay:<input type="text" id="datepicker" class="form-control"></p>
        <input type="button" id="btn-dashboard-fillter" class="btn btn-primary btn-sm" value="loc ket qua">
    </div>
            <div class="col-md-2">
                <p>Den Ngay:<input type="text"  id="datepicker2" class="form-control"></p>
            </div>
        </form>
    </div>
    <div class="col-md-12">
    <div id="myfirstchart" style="height: 250px;"></div>
    </div>
</body>
</html>
<style>
    /* Style cho title "Thong Ke" */
    .title_thongke {
        font-size: 24px;
        font-weight: bold;
    }

    /* Style cho form và các phần tử bên trong */
    form {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    /* Style cho input và select */
    input[type="text"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    /* Style cho nút "loc ket qua" */
    #btn-dashboard-fillter {
        padding: 8px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    #btn-dashboard-fillter:hover {
        background-color: #0056b3;
    }

    /* Style cho cả div.row */
    .row {
        max-width: 800px;
        margin: 0 auto;
    }
</style>
