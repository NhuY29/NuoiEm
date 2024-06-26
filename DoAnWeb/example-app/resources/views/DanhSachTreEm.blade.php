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
      max-width: 7xl;
      /* Set a maximum container width */
      margin: 0 auto;
      /* Center the container horizontally */
    }

    .custom-flex {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
      /* Add spacing between elements */
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
      border-radius: 0.375rem;
      /* Match border radius of the div */
      object-fit: cover;
      /* Crop image to fit within the container */
    }

    .custom-div button {
      background-color: #007bff;
      color: white;
      padding: 0.75rem 1.5rem;
      /* Adjust padding as needed */
      border: none;
      border-radius: 0.375rem;
      cursor: pointer;
      /* Indicate clickable button */

    }

    .custom-div {
      width: 300px;
      height: 500px;
      border: 1px solid #ccc;
      padding: 10px;
      word-wrap: break-word;
    }
    .container {
  max-width: 7xl; /* Chiều rộng tối đa */
  margin: 0 auto; /* Căn giữa container */
  padding-left: 2rem; /* Khoảng cách bên trái */
  padding-right: 2rem; /* Khoảng cách bên phải */
}

.custom-flex {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start; /* Căn chỉnh các phần tử từ trái qua phải */
  gap: 1rem; /* Khoảng cách giữa các phần tử */
}

.custom-div {
  flex: 1 1 25%; /* Chiều rộng cố định cho mỗi mục */
  padding: 1rem;
  border: 1px solid #e5e7eb;
  border-radius: 0.375rem;
  background-color: #fff;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
}
.custom-button {
  background-color: #007bff;
  color: white;
  padding: 10px 2rem;
  border: none;
  border-radius: 0.375rem;
  cursor: pointer;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Adding a subtle shadow */
}
a {
  text-decoration: none; /* Remove underline */
  color: inherit; /* Inherit the color from the parent element */
}
.custom-button:hover {
  background-color: #0056b3; /* Change color on hover for interactivity */
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
          @foreach($allHinhAnhRecords as $hinhAnhRecord)
          @if ($hinhAnhRecord->TreEm_id === $record->id)
          <img class="anh" src="{{ $hinhAnhRecord->DuongDan }}" alt="{{ $hinhAnhRecord->Ten }}" style="width: 100%; height: 45%;">
          @endif
          @endforeach
          <p><strong>Tên Em:</strong> {{ $record->Ten }} </p>
          <p><strong>Giới tính:</strong> {{ $record->GioiTinh ? 'Nam' : 'Nữ' }}</p>
          <p><strong>Học Tại:</strong> {{ $record->TenTruongHoc }}</p>
          <p><strong>Địa chỉ:</strong> {{ $record->DiaChi }}</p>
          <p><strong>Hổ Trợ Bởi:</strong> {{ $record->benThu3->Ten }}</p>

          <button type="submit" class="custom-button">Nhận Em</button>
          <a href="{{ route('thongtinchitiet', ['id' => $record->id]) }}}" class="custom-button">Chi Tiết</a>
        </div>
      </form>
      <?php $Ds++; ?> @if ($Ds % 4 === 0)
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