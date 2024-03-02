<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập Liệu Bên Thứ 3</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .max-w-md {
            flex: 1;
            /* Take up 20% of the space */
        }

        .max-w-md {
            width: 20%;
            float: right;
        }

        .table-container {
            width: 80%;
            float: left;
        }
    </style>
</head>

<body>
    <div class="max-w-md mx-auto">
        <form action="/save" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf

            <div class="mb-4">
                <label for="Ten" class="block text-gray-700 text-sm font-bold mb-2">Tên:</label>
                <input type="text" id="Ten" name="Ten" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="GioiTinh" class="block text-gray-700 text-sm font-bold mb-2">Giới tính:</label>
                <select id="GioiTinh" name="GioiTinh" class="block appearance-none w-full bg-white border border-gray-400 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:border-blue-500">
                    <option value="1">Nam</option>
                    <option value="0">Nữ</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="DiaChi" class="block text-gray-700 text-sm font-bold mb-2">Địa chỉ:</label>
                <textarea id="DiaChi" name="DiaChi" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            </div>

            <div class="mb-4">
                <label for="SDT" class="block text-gray-700 text-sm font-bold mb-2">Số điện thoại:</label>
                <input type="text" id="SDT" name="SDT" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="NgheNghiep" class="block text-gray-700 text-sm font-bold mb-2">Nghề nghiệp:</label>
                <input type="text" id="NgheNghiep" name="NgheNghiep" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="NoiCongTac" class="block text-gray-700 text-sm font-bold mb-2">Nơi công tác:</label>
                <input type="text" id="NoiCongTac" name="NoiCongTac" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="flex items-center justify-between">
                <input type="submit" value="Xác Nhận" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            </div>
        </form>

    </div>

    <!-- Bảng hiển thị dữ liệu từ cơ sở dữ liệu -->
    <div class="table-container">
        <h1 class="text-2xl font-bold mb-4 text-center text-blue-700 m-6">Nhập Liệu Bên Thứ 3 </h1>
        <table class="min-w-full bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 border border-collapse">
            <thead>
                <tr>
                    <th class="px-4 py-2 bg-blue-500 text-white border">Tên</th>
                    <th class="px-4 py-2 bg-blue-500 text-white border">Giới tính</th>
                    <th class="px-4 py-2 bg-blue-500 text-white border">Địa chỉ</th>
                    <th class="px-4 py-2 bg-blue-500 text-white border">Số điện thoại</th>
                    <th class="px-4 py-2 bg-blue-500 text-white border">Nghề nghiệp</th>
                    <th class="px-4 py-2 bg-blue-500 text-white border">Nơi công tác</th>
                    <th class="px-4 py-2 bg-blue-500 text-white border">Thao Tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach($allBenThu3Records as $index => $record)
                <tr id="row{{ $record->id }}" data-id="{{ $record->id }}" class="{{ $index % 2 === 0 ? 'bg-white' : 'bg-blue-100' }} border">
                    <td class="px-4 py-2 text-center border whitespace-normal max-w-xs">{{ $record->Ten }}</td>
                    <td class="px-4 py-2 text-center border whitespace-normal max-w-xs">{{ $record->GioiTinh ? 'Nam' : 'Nữ' }}</td>
                    <td class="px-4 py-2 text-center border whitespace-normal max-w-xs">{{ $record->DiaChi }}</td>
                    <td class="px-4 py-2 text-center border whitespace-normal max-w-xs">{{ $record->SDT }}</td>
                    <td class="px-4 py-2 text-center border whitespace-normal max-w-xs">{{ $record->NgheNghiep }}</td>
                    <td class="px-4 py-2 text-center border whitespace-normal max-w-xs">{{ $record->NoiCongTac }}</td>
                    <td class="px-4 py-2 text-center border whitespace-nowrap max-w-xs">
                        <form id="deleteForm{{ $record->id }}" action="/delete/{{ $record->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" data-id="{{ $record->id }}" onclick="deleteRow(this)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Xóa</button>
                            <!-- <button type="button" onclick="editForm({{ $record->id }})" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Chỉnh Sửa</button> -->
                            <button type="button" onclick="toggleEditForm({{ $record->id }})" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Chỉnh Sửa</button>
                        </form>
                    </td>
                </tr>
                <div id="editForm{{ $record->id }}" style="display: none;">
                <form  action="/update/{{ $record->id }}" method="post" style="display: none;">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="Ten_edit{{ $record->id }}" class="block text-gray-700 text-sm font-bold mb-2">Tên:</label>
                        <input type="text" id="Ten_edit{{ $record->id }}" name="Ten" value="{{ $record->Ten }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>

                    <div class="mb-4">
                        <label for="GioiTinh_edit{{ $record->id }}" class="block text-gray-700 text-sm font-bold mb-2">Giới tính:</label>
                        <select id="GioiTinh_edit{{ $record->id }}" name="GioiTinh" class="block appearance-none w-full bg-white border border-gray-400 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:border-blue-500">
                            <option value="1" {{ $record->GioiTinh == 1 ? 'selected' : '' }}>Nam</option>
                            <option value="0" {{ $record->GioiTinh == 0 ? 'selected' : '' }}>Nữ</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="DiaChi_edit{{ $record->id }}" class="block text-gray-700 text-sm font-bold mb-2">Địa chỉ:</label>
                        <textarea id="DiaChi_edit{{ $record->id }}" name="DiaChi" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $record->DiaChi }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label for="SDT_edit{{ $record->id }}" class="block text-gray-700 text-sm font-bold mb-2">Số điện thoại:</label>
                        <input type="text" id="SDT_edit{{ $record->id }}" name="SDT" value="{{ $record->SDT }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>

                    <div class="mb-4">
                        <label for="NgheNghiep_edit{{ $record->id }}" class="block text-gray-700 text-sm font-bold mb-2">Nghề nghiệp:</label>
                        <input type="text" id="NgheNghiep_edit{{ $record->id }}" name="NgheNghiep" value="{{ $record->NgheNghiep }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>

                    <div class="mb-4">
                        <label for="NoiCongTac_edit{{ $record->id }}" class="block text-gray-700 text-sm font-bold mb-2">Nơi công tác:</label>
                        <input type="text" id="NoiCongTac_edit{{ $record->id }}" name="NoiCongTac" value="{{ $record->NoiCongTac }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>

                    <div class="flex items-center justify-between">
                        <button type="button" onclick="cancelEdit({{ $record->id }})" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Hủy</button>
                        <input type="submit" value="Xác Nhận" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    </div>
                </form>
                </div>
                @endforeach
            </tbody>

        </table>
        <div class="flex justify-center">
            <a href="#" class="px-3 py-1 bg-gray-200 text-gray-700 mx-1 rounded">1</a>
            <a href="#" class="px-3 py-1 bg-gray-200 text-gray-700 mx-1 rounded">2</a>
            <a href="#" class="px-3 py-1 bg-gray-200 text-gray-700 mx-1 rounded">3</a>
            <a href="#" class="px-3 py-1 bg-gray-200 text-gray-700 mx-1 rounded">Next</a>
        </div>

    </div>
</body>
@if(Session::has('alert'))
<script>
    alert("{{ Session::get('alert') }}");
</script>
@endif

</html>
<script>
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
            form.style.display = 'table-row'; // Hiển thị form dưới dạng hàng của bảng
        } else {
            form.style.display = 'none'; // Ẩn form
        }
    }
</script>