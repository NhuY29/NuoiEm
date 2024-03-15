<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<nav class="bg-blue-500">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
      <div class="flex items-center">
        <div class="flex-shrink-0">
          <img class="h-8 w-8" src="resources/images/logo.svg" alt="Logo">
        </div>
        <div class="hidden md:block">
          <div class="ml-10 flex items-baseline space-x-4">
            <!-- Thêm menu xổ xuống dưới đây -->
            <div class="relative">
              <button type="button" class="px-3 py-2 rounded-md text-sm font-medium text-white hover:text-gray-300 focus:outline-none focus:text-gray-300" id="aboutMenu">
                Danh sách
                <svg class="h-4 w-4 inline-block ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
              </button>
              <div class="absolute right-0 mt-2 w-56 origin-top-right bg-white rounded-md shadow-lg hidden" id="aboutMenuDropdown">
                <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="aboutMenu">
                  <a href="/TreEm" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Trẻ Em</a>
                  <a href="/save" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Bên Thứ 3</a>
                  <a href="/ToChucTuThien" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Tổ Chức Từ Thiện</a>
                  <a href="/Quy" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Quỹ</a>
                </div>
              </div>
            </div>
            <a href="/User" class="px-3 py-2 rounded-md text-sm font-medium text-white hover:text-gray-300">Users</a>
          </div>
        </div>
      </div>
      <div class="hidden md:block">
        <div class="ml-4 flex items-center md:ml-6">
          <!-- Thêm nút đăng nhập và đăng xuất tại đây -->
          <button class="text-white hover:bg-blue-100 hover:text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Đăng Xuất</button>
        </div> 
      </div>
    </div>
  </div>
</nav>

</body>

<script>
  const aboutMenu = document.getElementById('aboutMenu');
  const aboutMenuDropdown = document.getElementById('aboutMenuDropdown');

  aboutMenu.addEventListener('click', () => {
    aboutMenuDropdown.classList.toggle('hidden');
  });

  // Đóng menu nếu click ra ngoài
  window.addEventListener('click', (e) => {
    if (!aboutMenu.contains(e.target) && !aboutMenuDropdown.contains(e.target)) {
      aboutMenuDropdown.classList.add('hidden');
    }
  });
</script>