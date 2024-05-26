<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Tin Người Nhận</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="headline">
            <h1>Bạn muốn góp sức<br>1 tuổi trẻ thật rực cháy<br></h1>
        </div>
        <div class="shape">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 151.1 151.1" fill="rgba(12, 94, 75, 0.1)">
                <path style="opacity:0.8;" d="M76.47,151.1l-.61-75.24A75.26,75.26,0,0,0,0,1.22H0L.61,76.47A75.25,75.25,0,0,0,76.47,151.1Z"></path>
                <path d="M76.47,151.1l-.61-75.24A75.24,75.24,0,0,1,150.49,0h0l.61,75.25A75.24,75.24,0,0,1,76.47,151.1Z"></path>
            </svg>
        </div>
        <div class="form-container">
            <form class="w-full max-w-md bg-white p-8 rounded-lg shadow-md" action="{{ route('gui-email') }}" method="POST">
                @csrf
                <div class="form-item">
                    <input type="email" name="email" class="form-control" placeholder="Nhập địa chỉ email">
                </div>
                <div class="form-item">
                    <input type="text" name="name" class="form-control" placeholder="Tên ">
                </div>
                <div class="form-item">
                    <input type="text" name="id_card_number" class="form-control" placeholder="Số CMND">
                </div>
                <div class="form-item">
                    <input type="text" name="phone_number" class="form-control" placeholder="Số điện thoại">
                </div>
                <div class="form-item">
                    <input type="text" name="NgheNghiep" class="form-control" placeholder="Nghề nghiệp">
                </div>
                <div class="form-item">
                    <input type="text" name="ThuNhapTrungBinh" class="form-control" placeholder="Thu nhập trung bình">
                </div>
                <div class="form-item">
                    <input type="text" name="DiaChi" class="form-control" placeholder="Địa chỉ">
                </div>
                <div class="button">
                    <button type="submit" class="button-text">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

<style>
    body, html {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #ffffff;
}

.container {
    position: relative;
    margin: 0 auto;
    width: 100%;
    max-width: 800px;
    text-align: center;
    padding: 20px;
}

.headline h1 {
    font-size: 2em;
    color: #004d40;
}

.shape {
    width: 100px;
    height: 100px;
    margin: 20px auto;
}

.form-container {
    margin-top: 20px;
}

.form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.form-item {
    margin-bottom: 15px;
    width: 100%;
}

.form-control {
    width: 80%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.button {
    margin-top: 20px;
}

.button-text {
    background-color: #004d40;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.button-text:hover {
    background-color: #00332e;
}

.image img {
    width: 100px;
    height: auto;
    border-radius: 50%;
}

</style>