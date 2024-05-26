<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Tin Chi Tiết Về Bé</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 900px;
            margin-top: 50px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .profile-img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            margin-bottom: 20px;
            object-fit: cover;
            object-position: center;
            border: 5px solid red;
            /* Add a border around the image with a blue color */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* Add a subtle shadow effect */
            filter: brightness(120%);
            /* Increase the brightness of the image */
        }

        .section-title {
            background-color: #007bff;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            margin-bottom: 15px;
            font-size: 1.2em;
        }

        .info-item {
            margin-bottom: 10px;
        }

        .info-item label {
            font-weight: bold;
            display: block;
        }

        .skills-bar {
            height: 10px;
            background-color: #e9ecef;
            border-radius: 5px;
            margin-top: 5px;
        }

        .skills-bar-inner {
            height: 100%;
            background-color: #007bff;
            border-radius: 5px;
        }

        .section {
            margin-bottom: 20px;
        }

        .section-title {
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            color: white;
            padding: 10px 20px;
            border-radius: 10px;
            margin-bottom: 15px;
            font-size: 1.2em;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .section-title:hover {
            transform: scale(1.1);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
        <div class="header">
    @if(!empty($anhTreEm) && $anhTreEm->isDelete == 0)
        <img src="{{ $anhTreEm->DuongDan }}" alt="Profile Picture" class="profile-img">
    @else
        <img src="https://via.placeholder.com/200" alt="No Image" class="profile-img">
    @endif
    <h1>{{ $treem->Ten }}</h1>
</div>

        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="section">
                    <div class="section-title">THÔNG TIN CƠ BẢN</div>
                    <div class="info-item">
                        <label>Địa Chỉ</label>
                        <div>{{ $treem->DiaChi }}</div>
                    </div>
                    <div class="info-item">
                        <label>Tên Trường Học</label>
                        <div>{{ $treem->TenTruongHoc }}</div>
                    </div>
                    <div class="info-item">
                        <label>Bên Hỗ Trợ:</label>
                        <div>{{ $treem->benThu3->Ten }}</div>
                    </div>
                </div>
                <div class="section">
                    <div class="section-title">HY VỌNG Ở TƯƠNG LAI</div>
                    <div class="info-item">
                        <p>{{$treem->UocMo}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="section">
                    <div class="section-title">Gia Cảnh</div>
                    <div class="info-item">
                        @if(!empty($baiviet->NoiDung))
                        {{ $baiviet->NoiDung }}
                        @else
                        <p>Thông tin về gia cảnh hiện không có sẵn.</p>
                        @endif
                    </div>
                </div>
                <div class="section">
                    <div class="section-title">Mong Muốn</div>
                    <div class="info-item">
                        <label>Chúng tôi mong muốn nhận được sự hỗ trợ từ quý vị để cung cấp cho em bé những điều kiện sống tốt nhất, đặc biệt là trong việc ăn uống và học tập</label>
                        <br>
                        <div><b>Về Ăn Uống và sức khỏe</b></div>
                        <ul>
                            <li>Mua thực phẩm cần thiết để đảm bảo em bé có bữa ăn cân đối và đủ dinh dưỡng hàng ngày.</li>
                            <li>Chi phí điều trị y tế cần thiết, bao gồm các loại thực phẩm bổ sung dinh dưỡng.</li>
                        </ul>
                    </div>
                    <div class="info-item">
                        <div><b>Về Học Tập</b></div>
                        <ul>
                            <li>Mua sách giáo trình và vật dụng học tập cần thiết cho em bé.</li>
                            <li>Chi trả học phí và các khoản phụ phí liên quan đến giáo dục.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
<br>

        <div class="footer">
    @if(!empty($anhTreEm) && $anhTreEm->isDelete == 0)
    <video width="100%" height="300" controls>
    <source src="{{ $anhTreEm->Video }}" type="video/mp4">

</video>
    @else
        <img src="https://via.placeholder.com/200" alt="No Image" class="profile-img">
    @endif
    </div>
    </div>
    
</body>

</html>