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