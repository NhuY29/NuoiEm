<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập Liệu Trẻ Em</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .max-w-md {
            flex: 1;
            /* Take up 20% of the space */
        }
    </style>
</head>

<body>
    <header>
    @include('menu')
    </header>
    <h1 class="text-2xl font-bold mb-4 text-center text-blue-700 m-12">Nhập Liệu Trẻ Em</h1>
    <div class="max-w-md mx-auto m-16">
        <form id="addForm" action="/TreEm" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" style="display: none;">
            @csrf
            <div class="mb-4">
                <label for="Ten" class="block text-gray-700 text-sm font-bold mb-2">Tên:</label>
                <input type="text" id="Ten" name="Ten" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="GioiTinh" class="block text-gray-700 text-sm font-bold mb-2">Giới tính:</label>
                <div class="relative">
                    <select id="GioiTinh" name="GioiTinh" class="block appearance-none w-full bg-white border border-gray-400 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:border-blue-500">
                        <option value="1">Nam</option>
                        <option value="0">Nữ</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9 9l3 3 3-3z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <label for="TenTruongHoc" class="block text-gray-700 text-sm font-bold mb-2">Tên Trường Học:</label>
                <textarea id="TenTruongHoc" name="TenTruongHoc" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            </div>
            <div class="mb-4">
                <label for="DiaChi" class="block text-gray-700 text-sm font-bold mb-2">Địa Chỉ:</label>
                <input type="text" id="DiaChi" name="DiaChi" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <label for="BenThu3_id" class="block text-gray-700 text-sm font-bold mb-2"> Bên Thứ 3:</label>
            <div class="relative">
                <select name="BenThu3_id" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                    @foreach ($allBenThubaRecords->where('isdelete', 0) as $record)
                    <option value="{{ $record->id }}">{{ $record->Ten }}</option>
                    @endforeach
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9 9l3 3 3-3z" />
                    </svg>
                </div>
            </div>

            <br>
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
                    <th class="px-4 py-2 bg-blue-500 text-white border">Tên</th>
                    <th class="px-4 py-2 bg-blue-500 text-white border">Giới tính</th>
                    <th class="px-4 py-2 bg-blue-500 text-white border">Tên Trường Học</th>
                    <th class="px-4 py-2 bg-blue-500 text-white border">Địa chỉ</th>
                    <th class="px-4 py-2 bg-blue-500 text-white border">Bên Thứ 3</th>
                    <th class="px-4 py-2 bg-blue-500 text-white border">Thao Tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach($allTreEmRecords as $index => $record)
                <tr id="row{{ $record->id }}" data-id="{{ $record->id }}" class="{{ $index % 2 === 0 ? 'bg-white' : 'bg-blue-100' }} border">
                    <td class="px-4 py-2 text-center border whitespace-normal max-w-xs">{{ ++$i }}</td>
                    <td class="px-4 py-2 text-center border whitespace-normal max-w-xs">{{ $record->Ten }}</td>
                    <td class="px-4 py-2 text-center border whitespace-normal max-w-xs">{{ $record->GioiTinh ? 'Nam' : 'Nữ' }}</td>
                    <td class="px-4 py-2 text-center border whitespace-normal max-w-xs">{{ $record->TenTruongHoc }}</td>
                    <td class="px-4 py-2 text-center border whitespace-normal max-w-xs">{{ $record->DiaChi }}</td>
                    <td class="px-4 py-2 text-center border whitespace-normal max-w-xs">{{ $record->benThu3->Ten }}</td>
                    <td class="px-4 py-2 text-center border whitespace-nowrap max-w-xs">
                        <form id="deleteForm{{ $record->id }}" action="/deleteTreEm/{{ $record->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" data-id="{{ $record->id }}" onclick="deleteRow(this)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Xóa</button>
                            <!-- <button type="button" onclick="editForm({{ $record->id }})" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Chỉnh Sửa</button> -->
                            <button type="button" onclick="toggleEditForm({{ $record->id }})" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Chỉnh Sửa</button>
                        </form>
                    </td>
                </tr>
                <div id="editForm{{ $record->id }}" style="display: none;" class="max-w-md mx-auto my-20">
                    <form action="/updateTreEm/{{ $record->id }}" method="post" style="display: none;" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
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

                            <label for="TenTruongHoc_edit{{ $record->id }}" class="block text-gray-700 text-sm font-bold mb-2">Tên Trường Học:</label>

                            <textarea id="TenTruongHoc_edit{{ $record->id }}" name="TenTruongHoc" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $record->DiaChi }}</textarea>

                        </div>
                        <div class="mb-4">

                            <label for="DiaChi_edit{{ $record->id }}" class="block text-gray-700 text-sm font-bold mb-2">Địa chỉ:</label>

                            <textarea id="DiaChi_edit{{ $record->id }}" name="DiaChi" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $record->DiaChi }}</textarea>

                        </div>


                        <label for="BenThu3_id" class="block text-gray-700 text-sm font-bold mb-2"> Bên Thứ 3:</label>
                        <div class="relative">
                            <select name="BenThu3_id" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                @foreach ($allBenThubaRecords->where('isdelete', 0) as $benThu3Record)
                                <option value="{{ $benThu3Record->id }}" {{ $benThu3Record->id == $record->BenThu3_id ? 'selected' : '' }}>
                                    {{ $benThu3Record->Ten }}
                                </option>
                                @endforeach
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9 9l3 3 3-3z" />
                                </svg>
                            </div>
                        </div>
                        <br>
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

                        <form action="{{ route('search2') }}" method="POST">
                            @csrf
                            <input name="search-items-name" type="text" class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none" placeholder="Tìm Kiếm">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg ml-2">Search</button>
                        </form>
                    </div>
                </div>
            </tbody>

        </table>

        {{ $allTreEmRecords->links() }}

    </div>
    </div>
</body>
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
</script>