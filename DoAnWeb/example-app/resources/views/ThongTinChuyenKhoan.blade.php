<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuyển khoản</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/3.2.4/tailwind.min.css" integrity="sha512-lHj/wtAXeo+o1829u2e839y87rF40m17/b2bVN4380+7a/8+f676345e23a49b298c2954f599" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Thêm CSS tùy chỉnh */
        body {
            font-family: sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto flex justify-center items-center h-screen">
        <div class="bg-white shadow-md rounded-lg p-8 w-full sm:w-1/2 md:w-1/3">
            <h3 class="text-center text-2xl font-bold mb-4">Đóng góp trực tiếp vào STK:</h3>
            <div class="flex flex-col sm:flex-row items-center justify-center mb-4">
                <img src="{{ asset('resources/images/chuyenkhoan.jpg') }}" alt="Mã QR" class="mb-4 rounded-lg sm:mr-4 sm:mb-0 w-200 h-100">
            </div>
            <div>
            <div>
                    <p class="text-lg"><strong>Tên:</strong> Nguyễn Thị Như Ý</p>
                    <p class="text-lg"><strong>Số tài khoản:</strong> 1026752391</p>
                    <p class="text-lg"><strong>Ngân hàng:</strong> Vietcombank</p>
                    <p class="text-lg"><strong>Chi nhánh:</strong> Mỹ Tho</p>
                </div>
            <div class="mb-4">
                <label for="note" class="block mb-2 text-sm font-medium">Nội dung chuyển ghi rõ
                    “Mã bé nhận nuôi” + Tên bạn</label>
            </div>
            <div class="mb-4">
                <label for="note" class="block mb-2 text-sm font-medium">*Lưu Ý: Chỉ gửi khi đã có Mã Nuôi Em</label>
            </div>
            <div class="mb-4">
                <label for="note" class="block mb-2 text-sm font-medium">Báo cáo tài chính công khai tại <b> taichinh.nuoiem.com</b> Team tài chính sẽ xác nhận chuyển khoản thành công vào email cho bạn trong 2-5 ngày kèm theo mã giao dịch.</label>
            </div>
            <div class="mb-4">
                <label for="note" class="block mb-2 text-sm font-medium"> Lưu ý: số tiền chuyển dư sẽ được đưa vào dự án xây trường</label>
            </div>
            </div>
            
        </div>
    </div>
</body>

</html>
