<html>
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
    </head>
    <body class="bg-green-50 font-sans">
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
    <section id="tentang-kami" class="py-16 px-8">
        <div class="container mx-auto text-center"> 
            <h1 class="text-4xl font-bold text-green-900">Tentang Kami</h1>
        </div>
        <div class="container mx-auto flex flex-col md:flex-row items-center md:items-start text-center md:text-left">
            <img src="img/logobesar.png" alt="Green Guard Logo" class="mx-auto mb-8 mr-20 mt-0 w-80">
            <p class="text-green-700 text-lg mt-12">
                Green Guard hadir sebagai solusi inovatif untuk melaporkan pencemaran lingkungan, memudahkan masyarakat dalam menjaga kebersihan dan kelestarian alam di sekitar mereka. 
                Konsep ini tidak hanya memberikan kemudahan, tetapi juga merupakan langkah cerdas dalam menghadirkan lingkungan yang lebih sehat dan bersih. 
                Green Guard mempersembahkan solusi modern untuk memudahkan setiap individu melaporkan berbagai bentuk pencemaran, 
                memastikan setiap sudut lingkungan kita tetap terjaga keindahannya, membawa kesejukan dan kenyamanan bagi semua.
            </p>
        </div>
    </section>

    <!-- Tim Kami Section -->
    <section id="tim-kami" class="px-8 bg-green-50">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold text-green-900 mb-12">Tim Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Member 1 -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <img src="img/tentang-kami.png" alt="Khrisna Fauzan Maulana" class="w-full h-48 object-cover rounded-t-lg mb-4">
                    <h3 class="text-xl font-bold text-green-900 mb-2">Khrisna Fauzan Maulana</h3>
                    <p class="text-green-700">Backend Developer</p>
                    <p class="text-green-600 text-sm">FEBE</p>
                </div>
                <!-- Member 2 -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <img src="img/tentang-kami.png" alt="Laita Zidan" class="w-full h-48 object-cover rounded-t-lg mb-4">
                    <h3 class="text-xl font-bold text-green-900 mb-2">Laita Zidan</h3>
                    <p class="text-green-700">Front-End Developer</p>
                    <p class="text-green-600 text-sm">FEBE</p>
                </div>
                <!-- Member 3 -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <img src="img/tentang-kami.png" alt="Putri Nur Rahmah" class="w-full h-48 object-cover rounded-t-lg mb-4">
                    <h3 class="text-xl font-bold text-green-900 mb-2">Putri Nur Rahmah</h3>
                    <p class="text-green-700">UI/UX Designer</p>
                    <p class="text-green-600 text-sm">FEBE</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
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
