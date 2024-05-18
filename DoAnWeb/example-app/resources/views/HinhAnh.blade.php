<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập Liệu Quỹ Cá Nhân</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .max-w-md {
            flex: 1;
            /* Take up 20% of the space */
        }

        table img {
            max-width: 200px;
            /* Adjust this value as needed */
            height: auto;
        }
    </style>
</head>

<body>
    <header>

        @include('menu')
    </header>
    <h1 class="text-2xl font-bold mb-4 text-center text-blue-700 m-12">Nhập Liệu Hình Ảnh</h1>
    <div class="max-w-md mx-auto">
        <form id="addForm" action="/HinhAnh" method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-20" style="display: none;">
            @csrf
            <div class="mb-4">
                <label for="DuongDan" class="block text-gray-700 text-sm font-bold mb-2">Tải lên ảnh:</label>
                <input type="file" id="DuongDan" name="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="ChuThich" class="block text-gray-700 text-sm font-bold mb-2">Chú Thích:</label>
                <input type="text" id="ChuThich" name="ChuThich" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <label for="BaiViet_id" class="block text-gray-700 text-sm font-bold mb-2">Bài Viết:</label>
            <div class="relative">
                <select name="BaiViet_id" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                    @foreach ($allBaiVietRecords as $record)
                    <option value="{{ $record->id }}">{{ $record->TieuDe }}</option>
                    @endforeach
                </select>
                <br>
            </div>
            <label for="TreEm_id" class="block text-gray-700 text-sm font-bold mb-2">Trẻ Em:</label>
            <div class="relative">
            <select name="TreEm_id" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                    @foreach ($allTreEmRecords as $record)
                    @if (!$allHinhAnhRecords->contains('TreEm_id', $record->id)) <!-- Chỉ hiển thị nếu không tồn tại trong bảng Baiviet -->
                    <option value="{{ $record->id }}">{{ $record->Ten }}</option>
                    @endif
                    @endforeach
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9 9l3 3 3-3z" />
                    </svg>
                </div>
                <br>
            </div>
            <div class="flex items-center justify-between">
                <button type="button" onclick="cancelAdd()" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Hủy</button>
                <input type="submit" value="Xác Nhận" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            </div>
        </form>

    </div>

    <!-- Bảng hiển thị dữ liệu từ cơ sở dữ liệu -->
    <div class="table-container">
        <table class="min-w-full bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 border border-collapse">
            <thead>

                <tr>
                    <th class="px-4 py-2 bg-blue-500 text-white border">STT</th>
                    <th class="px-4 py-2 bg-blue-500 text-white border">Đường Dẫn</th>
                    <th class="px-4 py-2 bg-blue-500 text-white border">Ảnh</th>
                    <th class="px-4 py-2 bg-blue-500 text-white border">Chú Thích</th>
                    <th class="px-4 py-2 bg-blue-500 text-white border">Bài Viết</th>
                    <th class="px-4 py-2 bg-blue-500 text-white border">Trẻ Em</th>
                    <th class="px-4 py-2 bg-blue-500 text-white border">Thao Tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach($allHinhAnhRecords as $index => $record)
                <tr id="row{{ $record->id }}" data-id="{{ $record->id }}" class="{{ $index % 2 === 0 ? 'bg-white' : 'bg-blue-100' }} border">
                    <td class="px-4 py-2 text-center border whitespace-normal max-w-xs">{{ ++$i }}</td>
                    <td class="px-4 py-2 text-center border whitespace-normal max-w-xs break-words">
                        {{ $record->DuongDan }}
                    </td>
                    <td>
                        <img src="{{ $record->DuongDan }}" alt="{{ $record->ChuThich }}">
                    </td>

                    <td class="px-4 py-2 text-center border whitespace-normal max-w-xs">
                        {{ $record->ChuThich }}
                    </td>
                    <td class="px-4 py-2 text-center border whitespace-normal max-w-xs">{{ $record->BaiViet->TieuDe }}</td>
                    <td class="px-4 py-2 text-center border whitespace-normal max-w-xs">{{ $record->TreEm->Ten }}</td>
                    <td>
                        <form id="deleteForm{{ $record->id }}" action="/deleteHinhAnh/{{ $record->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" data-id="{{ $record->id }}" onclick="deleteRow(this)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Xóa</button>
                            <button type="button" onclick="toggleEditForm({{ $record->id }})" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Chỉnh Sửa</button>
                        </form>
                    </td>
                </tr>

                <div id="editForm{{ $record->id }}" style="display: none;" class="max-w-md mx-auto my-8">
                    <form action="{{ route('update-image', ['id' => $record->id]) }}" method="post" enctype="multipart/form-data"  style="display: none;" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">

                            <label for="DuongDan_edit{{ $record->id }}" class="block text-gray-700 text-sm font-bold mb-2">Đường Dẫn:</label>


                            <input type="file" id="DuongDan_edit{{ $record->id }}" name="DuongDan" value="{{ $record->DuongDan }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">


                        </div>

                        <div class="mb-4">

                            <label for="ChuThich_edit{{ $record->id }}" class="block text-gray-700 text-sm font-bold mb-2">Chú Thích:</label>

                            <input type="text" id="ChuThich_edit{{ $record->id }}" name="ChuThich" value="{{ $record->ChuThich }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                        </div>
                        <div class="mb-4">
                            <label for="BaiViet_id_edit{{ $record->id }}" class="block text-gray-700 text-sm font-bold mb-2">Bài Viết:</label>
                            <div class="relative">
                                <select id="BaiViet_id_edit{{ $record->id }}" name="BaiViet_id" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                    @foreach ($allBaiVietRecords as $BaiVietRecord)
                                    <option value="{{ $BaiVietRecord->id }}" {{ $BaiVietRecord->id == $record->BaiViet_id ? 'selected' : '' }}>{{ $BaiVietRecord->TieuDe }}</option>
                                    @endforeach
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M9 9l3 3 3-3z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="TreEm_id_edit{{ $record->id }}" class="block text-gray-700 text-sm font-bold mb-2">Trẻ Em:</label>
                            <div class="relative">
                            <select name="TreEm_id" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                    @foreach ($allTreEmRecords as $record)
                    @if (!$allHinhAnhRecords->contains('TreEm_id', $record->id)) <!-- Chỉ hiển thị nếu không tồn tại trong bảng Baiviet -->
                    <option value="{{ $record->id }}">{{ $record->Ten }}</option>
                    @endif
                    @endforeach
                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M9 9l3 3 3-3z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center justify-between">

                            <button type="button" onclick="cancelEdit({{ $record->id }})" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Hủy</button>

                            <input type="submit" value="Xác Nhận" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">

                        </div>
                    </form>
                </div>
                @endforeach
                <div class="flex items-center my-4">
                    <button onclick="toggleAddForm()" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Thêm</button>
                    <div class="flex items-center ml-4">
                        <form action="{{ route('searchHinhAnh') }}" method="POST">
                            @csrf
                            <input name="search-items-name" type="text" class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none" placeholder="Tìm Kiếm">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg ml-2">Search</button>
                        </form>
                    </div>
                </div>
            </tbody>

        </table>
        {{ $allHinhAnhRecords->links() }}
    </div>
</body>
@if(Session::has('alert'))
<script>
    alert("{{ Session::get('alert') }}");
</script>
@endif

</html>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let form = document.getElementById('searchForm');
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Ngăn chặn sự kiện mặc định của form
            // Thực hiện tìm kiếm bằng JavaScript hoặc gửi AJAX request tới server
        });
    });

    function deleteRow(button) {
        var id = button.getAttribute('data-id');
        if (confirm("Bạn có chắc chắn muốn xóa dòng này không?")) {
            document.getElementById("deleteForm" + id).submit();
        }
    }

    function editRow(id) {
        // Hide all edit forms
        var editForms = document.querySelectorAll('[id^=editForm]');
        editForms.forEach(function(form) {
            form.style.display = 'none';
        });

        // Show the edit form of the corresponding record
        document.getElementById('editForm' + id).style.display = 'block';
    }

    function cancelEdit(id) {
        // Lấy element của form chỉnh sửa
        var form = document.getElementById('editForm' + id);

        // Ẩn form
        form.style.display = 'none';
    }

    function toggleEditForm(id) {
        // Lấy element của form chỉnh sửa
        var form = document.getElementById('editForm' + id);

        // Hiển thị form nếu đang ẩn, ẩn đi nếu đang hiển thị
        if (form.style.display === 'none') {
            form.style.display = 'block'; // Hiển thị form dưới dạng hàng của bảng
        } else {
            form.style.display = 'none'; // Ẩn form
        }
    }

    function toggleAddForm() {
        // Lấy element của form thêm
        var form = document.getElementById('addForm');

        // Hiển thị form nếu đang ẩn, ẩn đi nếu đang hiển thị
        if (form.style.display === 'none') {
            form.style.display = 'block';
        } else {
            form.style.display = 'none';
        }
    }

    function cancelAdd() {
        // Assuming the form has an ID of 'addForm'
        var form = document.getElementById('addForm');
        form.style.display = 'none'; // Hide the form when the "Hủy" button is clicked
    }

    function formatNumberWithCommas(number) {
        return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

    function formatCurrency(input) {
        const rawValue = input.value; // Giữ nguyên giá trị đã bị loại bỏ dấu phẩy

        // Loại bỏ dấu phẩy để chuẩn bị định dạng lại
        const value = rawValue.replace(/,/g, '');

        // Kiểm tra nếu giá trị là một số hợp lệ
        if (!isNaN(value)) {
            // Định dạng giá trị với dấu phẩy sau mỗi ba chữ số
            const formattedValue = formatNumberWithCommas(value);

            // Gán giá trị đã được định dạng vào input
            input.value = rawValue; // Gán lại giá trị đã bị loại bỏ dấu phẩy vào input
            input.nextElementSibling.textContent = formattedValue; // Gán giá trị đã được định dạng vào text kế tiếp của input
        }
    }
</script>