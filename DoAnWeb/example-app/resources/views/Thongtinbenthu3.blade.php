<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ route('Information') }}" method="POST" enctype="multipart/form-data">
@csrf  
    <label for="Ten">Tên</label>
    <input type="text" name="Ten" placeholder="Nhập tên của bạn">
    <label for="DiaChi">Địa Chỉ</label>
    <input type="text" name="DiaChi" placeholder="Nhập địa chỉ của bạn">
    <label for="Sdt">Số Điện Thoại</label>
    <input type="text" name="Sdt" placeholder="Nhập số điện thoại của bạn">
    <label for="NgheNghiep">Nghề Nghiệp</label>
    <input type="text" name="NgheNghiep" placeholder="Nhập nghề nghiệp của bạn">
    <label for="NoiCongTac">Nơi Công Tác</label>
    <input type="text" name="NoiCongTac" placeholder="Nhập nơi công tác của bạn">
    <input type="submit" value="Gửi phản hồi">
</form>
</body>
</html>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

form {
    max-width: 400px;
    margin: 50px auto;
    background: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

form input[type="text"] {
    width: calc(100% - 12px);
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

form input[type="submit"] {
    width: 100%;
    background: #007bff;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

form input[type="submit"]:hover {
    background: #0056b3;
}

</style>