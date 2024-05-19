<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="flex justify-center items-center h-screen bg-gray-100">
    <form class="w-full max-w-md bg-white p-8 rounded-lg shadow-md" action="{{ route('gui-email') }}" method="POST">
        @csrf
        <h2 class="text-2xl font-bold mb-4">Mời nhập thông tin người nhận </h2>
        <div class="mb-4">
            <input type="email" name="email" class="w-full p-2 border border-gray-300 rounded" placeholder="Nhập địa chỉ email">
        </div>
        <div class="mb-4">
            <input type="text" name="name" class="w-full p-2 border border-gray-300 rounded" placeholder="Tên khách hàng">
        </div>
        <div class="mb-4">
            <input type="text" name="id_card_number" class="w-full p-2 border border-gray-300 rounded" placeholder="Số CMND">
        </div>
        <div class="mb-4">
            <input type="text" name="phone_number" class="w-full p-2 border border-gray-300 rounded" placeholder="Số điện thoại">
        </div>
        <div class="mb-4">
            <input type="text" name="NgheNghiep" class="w-full p-2 border border-gray-300 rounded" placeholder="Nghe nghệp">
        </div>
        <div class="mb-4">
            <input type="text" name="ThuNhapTrungBinh" class="w-full p-2 border border-gray-300 rounded" placeholder="Thu nhap trung bình">
        </div>
        <div class="mb-4">
            <input type="text" name="DiaChi" class="w-full p-2 border border-gray-300 rounded" placeholder="Dia chỉ">
        </div>
        <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-700">Submit</button>
    </form>
</div>
</body>
</html>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #2980b9;
        }
    </style>