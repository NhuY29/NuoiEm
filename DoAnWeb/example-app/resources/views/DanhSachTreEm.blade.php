<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Danh sách Trẻ em</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/3.2.4/tailwind.min.css" integrity="sha512-lHj/wtAXeo+o1829u2e839y87rF40m17/b2bVN4380+7a/8+f676345e23a49b298c2954f599" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    /* Thêm CSS tùy chỉnh */
    .container {
      max-width: 7xl; /* Set a maximum container width */
      margin: 0 auto; /* Center the container horizontally */
    }

    .custom-flex {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem; /* Add spacing between elements */
    }

    .custom-div {
      flex: 1 0 auto;
      padding: 2rem; 
      border: 1px solid #e5e7eb;
      border-radius: 0.375rem;
      background-color: #fff;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1); 
    }

    .custom-div img {
      width: 100px;
      height: auto;
      border-radius: 0.375rem; /* Match border radius of the div */
      object-fit: cover; /* Crop image to fit within the container */
    }

    .custom-div button {
      background-color: #007bff;
      color: white;
      padding: 0.75rem 1.5rem; /* Adjust padding as needed */
      border: none;
      border-radius: 0.375rem;
      cursor: pointer; /* Indicate clickable button */
      
    }
    .custom-div {
    width: 300px;
    height: 400px;
    border: 1px solid #ccc;
    padding: 10px;
    word-wrap: break-word;
  }
  </style>
</head>

<body>
<div class="container mx-auto">
    <div class="p-4 border-b border-gray-200 hover:bg-gray-100 custom-flex">
      @foreach($allTreEmRecords as $Ds => $record)
      <form method="GET" action="{{ route('danhsachtreem', ['id' => $record->id]) }}">
      <input type="hidden" name="treem_id" value="{{ $record->id }}">
      <div class="custom-div">
        @if(isset($record->imagePath) && !empty($record->imagePath))
        <img src="https://th.bing.com/th/id/OIP.SvrKyZhazpRfhDeGMq59yQAAAA?rs=1&pid=ImgDetMain" alt="Ảnh của bạn">
        @endif
        <!-- <p class="text-lg font-medium"><strong>Mã Nhận Em:</strong> {{ $Ds + 1 }}</p> -->
        <p><strong>Tên Em:</strong> {{ $record->Ten }} </p>
        <p><strong>Giới tính:</strong> {{ $record->GioiTinh ? 'Nam' : 'Nữ' }}</p>
        <p><strong>Học Tại:</strong> {{ $record->TenTruongHoc }}</p>
        <p><strong>Địa chỉ:</strong> {{ $record->DiaChi }}</p>
        <p><strong>Hổ Trợ Bởi:</strong> {{ $record->benThu3->Ten }}</p>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700">Nhận Em</button>
      </div>
      </form>
  <?php $Ds++; ?>  @if ($Ds % 4 === 0)
        <div class="custom-flex">
        @if ($Ds % 4 !== 0)
    </div>
    @endif
      @endif
      @endforeach
      
    </div>
  </div>

</body>

</html>

