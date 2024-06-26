<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý người dùng</title>
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
    <h1 class="text-2xl font-bold mb-4 text-center text-blue-700 m-12">Quản lý người dùng</h1>
    <div class="max-w-md mx-auto m-16">
        <form id="addForm" action="/User" method="post" class="bg-white shadow-md rounded px-8 pt-6 pQuản lý người dùngb-8 mb-4" style="display: none;">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Tên:</label>
                <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="Email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                <input type="text" id="Email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="Address" class="block text-gray-700 text-sm font-bold mb-2">Địa Chỉ:</label>
                <textarea id="Address" name="Address" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Mật Khẩu:</label>
                <input type="password" id="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></input>
            </div>
            <div class="mb-4">
                <label for="Phone" class="block text-gray-700 text-sm font-bold mb-2">Điện Thoại:</label>
                <input type="text" id="Phone" name="Phone" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <label for="roles_id" class="block text-gray-700 text-sm font-bold mb-2"> Role :</label>
            <div class="relative">
                <select name="roles_id" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                @foreach ($allRolesRecords as $record)
  
            <option value="{{ $record->id }}">{{ $record->name }}</option>

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
                    <th class="px-4 py-2 bg-blue-500 text-white border">Email</th>
                    <th class="px-4 py-2 bg-blue-500 text-white border">Số điện thoại</th>
                    <th class="px-4 py-2 bg-blue-500 text-white border">Địa chỉ</th>
                    <th class="px-4 py-2 bg-blue-500 text-white border">Role</th>
                    <th class="px-4 py-2 bg-blue-500 text-white border">Thao Tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach($allUserRecords as $index => $record)
                <tr id="row{{ $record->id }}" data-id="{{ $record->id }}" class="{{ $index % 2 === 0 ? 'bg-white' : 'bg-blue-100' }} border">
                    <td class="px-4 py-2 text-center border whitespace-normal max-w-xs">{{ ++$i }}</td>
                    <td class="px-4 py-2 text-center border whitespace-normal max-w-xs">{{ $record->name }}</td>
                    <td class="px-4 py-2 text-center border whitespace-normal max-w-xs">{{ $record->email }}</td>
                    <td class="px-4 py-2 text-center border whitespace-normal max-w-xs">{{ $record->Phone }}</td>
                    <td class="px-4 py-2 text-center border whitespace-normal max-w-xs">{{ $record->Address }}</td>
                    <td class="px-4 py-2 text-center border whitespace-normal max-w-xs">
                    @if($record->roles->roles_id == 1)
                        SuperAdmin
                    @elseif($record->roles->roles_id == 2)
                        Admin
                    @elseif($record->roles->roles_id == 3)
                        Nhanvien
                    @else
                        Unknown Role
                    @endif
                </td>
                    <td class="px-4 py-2 text-center border whitespace-nowrap max-w-xs">
                        <form id="deleteForm{{ $record->id }}" action="/deleteUser/{{ $record->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" data-id="{{ $record->id }}" onclick="deleteRow(this)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Xóa</button>
                            <!-- <button type="button" onclick="editForm({{ $record->id }})" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Chỉnh Sửa</button> -->
                            <button type="button" onclick="toggleEditForm({{ $record->id }})" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Chỉnh Sửa</button>
                        </form>
                    </td>
                </tr>
                <div id="editForm{{ $record->id }}" style="display: none;" class="max-w-md mx-auto my-20">
                    <form action="/updateUser/{{ $record->id }}" method="post" style="display: none;" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">


                            <label for="name_edit{{ $record->id }}" class="block text-gray-700 text-sm font-bold mb-2">Tên:</label>

                            <input type="text" id="name_edit{{ $record->id }}" name="name" value="{{ $record->name }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                        </div>
                        <div class="mb-4">

                        <label for="email_edit{{ $record->id }}" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>

                        <input type="text" id="email_edit{{ $record->id }}" name="email" value="{{ $record->email }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">


                            </select>

                        </div>
                        <div class="mb-4">

                            <label for="Phone_edit{{ $record->id }}" class="block text-gray-700 text-sm font-bold mb-2">Số điện thoại:</label>

                            <textarea id="Phone_edit{{ $record->id }}" name="Phone" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $record->Phone }}</textarea>

                        </div>
                        <div class="mb-4">

                            <label for="Address_edit{{ $record->id }}" class="block text-gray-700 text-sm font-bold mb-2">Địa chỉ:</label>

                            <textarea id="Address_edit{{ $record->id }}" name="Address" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $record->Address }}</textarea>

                        </div>


                        <label for="roles_edit{{ $record->id }}" class="block text-gray-700 text-sm font-bold mb-2"> Role:</label>
                        <div class="relative">
                            <select name="BenThu3_id" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                            @foreach ($allRolesRecords as $roleRecord)
                                <option value="{{ $roleRecord->id }}" {{ $roleRecord->id == $record->roles_id ? 'selected' : '' }}>
                                    {{ $roleRecord->name }}
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

                        <form action="{{ route('searchUser') }}" method="POST">
                            @csrf
                            <input name="search-items-name" type="text" class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none" placeholder="Tìm Kiếm">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg ml-2">Search</button>
                        </form>
                    </div>
                </div>
            </tbody>

        </table>

        {{ $allUserRecords->links() }}

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