<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css','resources/js/app.js'])
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

        <title>Green Guard</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    </head>
    <body>
        

    <nav class="bg-[#E6F5F3] border-gray-200 ">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="img/GreenGuard.png" class="h-15" alt="Logo" />
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-[#E6F5F3] md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 bg-[#E6F5F3] dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="{{route('home')}}" class="block py-2 px-3 text-[#00534B] rounded md:bg-transparent md:text-green-700 md:p-0 dark:text-white md:dark:text-green-500" aria-current="page">Beranda</a>
        </li>
        <li>
          <a href="{{route('artikel')}}" class="block py-2 px-3 text-[#00534B] rounded md:bg-transparent md:text-green-700 md:p-0 dark:text-white md:dark:text-green-500">Artikel</a>
        </li>
        <li>
          <a href="{{route('riwayat')}}" class="block py-2 px-3 text-[#00534B] rounded md:bg-transparent md:text-green-700 md:p-0 dark:text-white md:dark:text-green-500">Riwayat</a>
        </li>
        <li>
          <a href="{{route('tentangkami')}}" class="block py-2 px-3 text-[#00534B] rounded md:bg-transparent md:text-green-700 md:p-0 dark:text-white md:dark:text-green-500">Tentang Kami</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="flex text-5xl items-center justify-center my-4 font-bold">Artikel</div>
<div class="flex w-full h-auto mx-4 justify-center items-center my-3">
    <div class="flex h-fit w-1/3 bg-[#B0DEDA] p-5 pr-4 rounded-lg mx-3">
        <img src="img/artikel.png" class="flex mr-2">
        <div class="flex font-bold text-base text-[#00534B] text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
    </div>
    <div class="flex h-fit w-1/3 bg-[#B0DEDA] p-5 pr-4 rounded-lg">
        <img src="img/artikel.png" class="flex mr-2">
        <div class="flex font-bold text-base text-[#00534B] text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
    </div>
</div>
<div class="flex w-full h-auto mx-4 justify-center items-center my-3">
    <div class="flex h-fit w-1/3 bg-[#B0DEDA] p-5 pr-4 rounded-lg mx-3">
        <img src="img/artikel.png" class="flex mr-2">
        <div class="flex font-bold text-base text-[#00534B] text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
    </div>
    <div class="flex h-fit w-1/3 bg-[#B0DEDA] p-5 pr-4 rounded-lg">
        <img src="img/artikel.png" class="flex mr-2">
        <div class="flex font-bold text-base text-[#00534B] text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
    </div>
</div>
<div class="flex w-full h-auto mx-4 justify-center items-center my-3">
    <div class="flex h-fit w-1/3 bg-[#B0DEDA] p-5 pr-4 rounded-lg mx-3">
        <img src="img/artikel.png" class="flex mr-2">
        <div class="flex font-bold text-base text-[#00534B] text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
    </div>
    <div class="flex h-fit w-1/3 bg-[#B0DEDA] p-5 pr-4 rounded-lg">
        <img src="img/artikel.png" class="flex mr-2">
        <div class="flex font-bold text-base text-[#00534B] text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
    </div>
</div>
<div class="flex w-full h-auto mx-4 justify-center items-center my-3">
    <div class="flex h-fit w-1/3 bg-[#B0DEDA] p-5 pr-4 rounded-lg mx-3">
        <img src="img/artikel.png" class="flex mr-2">
        <div class="flex font-bold text-base text-[#00534B] text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
    </div>
    <div class="flex h-fit w-1/3 bg-[#B0DEDA] p-5 pr-4 rounded-lg">
        <img src="img/artikel.png" class="flex mr-2">
        <div class="flex font-bold text-base text-[#00534B] text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
    </div>
</div>
<footer id="footer" class="px-8 bg-green-900 mt-16">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8 grid grid-cols-1 sm:grid-cols-2 gap-8">
            <!-- Bagian Kiri: Logo dan Deskripsi -->
            <div class="flex flex-col">
                <a href="https://greenguard.com/" class="flex items-center">
                    <img src="img/logo putih 1.png" class="w-36 mb-4" alt="Green Guard Logo" />
                </a>
                <p class="text-green-50">Green Guard hadir sebagai solusi inovatif untuk melaporkan pencemaran lingkungan, memudahkan masyarakat dalam menjaga kebersihan dan kelestarian alam di sekitar mereka.</p>
            </div>
    
            <!-- Bagian Kanan: Tentang dan Kontak Kami -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                <div>
                    <h2 class="mb-6 text-xl font-bold text-green-50">Tentang</h2>
                    <ul class="text-green-50">
                        <li class="mb-2">
                            <a href="#tentang-kami">Tentang Kami</a>
                        </li>
                        <li class="mb-2">
                            <a href="#faq">FAQ</a>
                        </li>
                        <li class="mb-2">
                            <a href="#tim-kami">Tim Kami</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-xl font-bold text-green-50">Kontak Kami</h2>
                    <ul class="text-green-50">
                        <li class="mb-2">
                            <i class="fa-brands fa-instagram mr-4"></i>
                            <a>@green_guard</a>
                        </li>
                        <li class="mb-2">
                            <i class="fa-regular fa-envelope mr-4"></i>
                            <a>greenguard@gmail.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    
        <!-- Bagian Bawah: Copyright -->
        <div class="w-full bg-green-900 py-4">
            <p class="text-center text-sm text-green-50">Copyright &copy; 2024 Green Guard</p>
        </div>
    </footer>

</body>
</html>