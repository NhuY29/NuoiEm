<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ route('store.task') }}" method="POST">
    @csrf
    <input type="email" name="email" placeholder="Nhập địa chỉ email">
    <textarea name="message" placeholder="Nội dung email"></textarea>
    <input type="text" name="Ten" placeholder="Tên khách hàng"><br>
    <input type="text" name="id_card_number" placeholder="Số CMND"><br>
    <input type="text" name="phone_number" placeholder="Số điện thoại"><br>
    <button type="submit">Submit</button>
</form>
</body>
</html>