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
    </style>
</head>

<body>
    <div class="max-w-md mx-auto">
        <form action="/save" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf <!-- Đảm bảo bảo mật CSRF -->

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
                <td class="px-4 py-2 text-center border">{{ $record->Ten }}</td>
                <td class="px-4 py-2 text-center border">{{ $record->GioiTinh ? 'Nam' : 'Nữ' }}</td>
                <td class="px-4 py-2 text-center border">{{ $record->DiaChi }}</td>
                <td class="px-4 py-2 text-center border">{{ $record->SDT }}</td>
                <td class="px-4 py-2 text-center border">{{ $record->NgheNghiep }}</td>
                <td class="px-4 py-2 text-center border">{{ $record->NoiCongTac }}</td>
                <td class="px-4 py-2 text-center border">
                    <form id="deleteForm{{ $record->id }}" action="/delete/{{ $record->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" data-id="{{ $record->id }}" onclick="deleteRow(this)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Xóa</button>
                    </form>
                </td>

            </tr>
            @endforeach
        </tbody>
        @if(Session::has('alert'))
        <script>
            alert("{{ Session::get('alert') }}");
        </script>
        @endif

    </table>
</body>

</html>
<script>
    function deleteRow(button) {
        var id = button.getAttribute('data-id');
        if (confirm("Bạn có chắc chắn muốn xóa dòng này không?")) {
            document.getElementById("deleteForm" + id).submit();
            // Xóa dòng khỏi bảng
            document.getElementById("row" + id).remove();
        }
    }
</script>
