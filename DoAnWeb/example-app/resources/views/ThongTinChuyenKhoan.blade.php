<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuyển khoản</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/3.2.4/tailwind.min.css" integrity="sha512-lHj/wtAXeo+o1829u2e839y87rF40m17/b2bVN4380+7a/8+f676345e23a49b298c2954f599" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 500px;
            margin: auto;
            padding: 30px;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .form-title {
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
        }

        .qr-code-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .qr-code {
            width: 300px;
            height: 300px;
            border: 5px solid #ddd;
            border-radius: 50%;
        }

        .info-text,
        .important-note {
            display: inline-block;
            vertical-align: top;
            width: 50%;
            padding: 10px;
            font-size: 0.85rem;
            margin-bottom: 10px;
        }

        .form-group {
            display: flex;
        }

        .info-text {
            color: #666;
        }

        .important-note,
        .important-note2 {
            color: #f00;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 40px 10px;
            padding: 10px 20px;
            cursor: pointer;
            transition: all 0.2s ease-in-out;
            animation: shake 0.8s cubic-bezier(0.215, 0.61, 0.35, 1) infinite alternate;
        }

        .container:hover .btn-primary {
            visibility: visible;
            animation: shake 2s linear infinite;
        }

        @keyframes shake {
            0% {
                transform: translateX(0);
            }

            25% {
                transform: translateY(-5px);
            }

            50% {
                transform: translateX(5px);
            }

            75% {
                transform: translateY(5px);
            }

            100% {
                transform: translateX(0);
            }
        }

        .btn-primary {
            visibility: hidden;
        }

        .btn-primary:hover {
            background-color: #0062cc;
        }

        #copied-notification {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 5px 10px;
            background-color: #808080;
            color: #fff;
            border-radius: 5px;
            opacity: 0;
            transition: all 0.2s ease-in-out;
            z-index: 1;
        }

        #copied-notification.visible {
            opacity: 1;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="form-title">Đóng góp trực tiếp vào STK: <button type="submit" class="btn btn-primary" onclick="copyHello()">Ấn để coppy STK</button></h2>
        <div class="qr-code-container">
            <img src="{{ asset('resources/images/chuyenkhoan.jpg') }}" alt="Mã QR" class="qr-code">
        </div>
        <div class="form-group">
            <div class="info-text">
                <p id="hello">Số tài khoản: 1026752391 </p>
                <p>Ngân hàng: VietComBank</p>
                <p>Chủ TK: Nguyễn Thị Như Ý</p>
                <p>Chi Nhánh: Mỹ Tho</p>
            </div>
            <div class="important-note">
                <p>
                    Nội dung chuyển khoản ghi rõ:
                    "Mã bé nhận nuôi"+ Tên bạn
                </p>
                <p>*Anh chị lưu ý chỉ gửi khi đã có Mã NE</p>
            </div>
        </div>
        <div>
            <p>Báo cáo tài chính công khai tại <a href="#">taichinh.nuoiem</a>. Team tài chính sẽ xác nhận chuyển khoản thành công vào email cho bạn trong 2-5 ngày kèm theo mã giao dịch</p>
            <p class="important-note2">* Lưu ý, số tiền chuyển dư sẽ được đưa vào dự án xây trường</p>
        </div>
        <div id="copied-notification">Copied!</div>
    </div>
</body>

</html>
<script>
    const button = document.querySelector(".btn-primary");
    const notification = document.querySelector("#copied-notification");

    function copyHello() {
        navigator.clipboard.writeText("1026752391");
        notification.classList.add("visible");
        setTimeout(() => {
            notification.classList.remove("visible");
        }, 1000);
    }
</script>