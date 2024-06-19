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

<div class="flex w-full bg-[#54B9AF] p-5 box-border justify-center items-center content-center" >
  <div class="flex flex-col  flex-wrap w-6/12 justify-center pl-5 ml-8">
    <div class="text-6xl font-bold mb-20">Cintai & Lestarikan <span class="text-[#00534B]">Lingkungan </span>Kita</div>
    <div class="text-base text-[#00534B]">Tingkatkan kualitas lingkungan sekitarmu bersama Platform Pengaduan Pencemaran Lingkungan. Laporkan berbagai bentuk pencemaran dengan mudah dan cepat, dan berkontribusilah dalam menjaga kelestarian alam untuk masa depan yang lebih baik.</div>
    

<!-- Modal toggle -->
<button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block text-white bg-[#00534B]  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center w-auto mt-5" type="button">
  Laporkan!
</button>

<!-- Main modal -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Formulir Pengaduan
                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">

            <form method="POST" action="{{ route('data.addPengaduan') }}" class="max-w-sm mx-auto" enctype="multipart/form-data">
              @csrf
              <div class="mb-5">
                  <label for="lokasi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Lokasi Pencemaran</label>
                  <input type="text" name= "lokasi" id="lokasi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              </div>
              <div class="mb-5">
                  <label for="jenis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Pencemaran</label>
                  <input type="text" name= "jenis" id="jenis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              </div>
              
<div class="relative max-w-sm">
  <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
     <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
      </svg>
  </div>
  <input name= "tanggal" id="tanggal" datepicker datepicker-format="mm/dd/yyyy" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
</div>

              <div class="mb-5">
                <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment..."></textarea>
              </div>
              <label for="file" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload file</label>
              <input id="file" name="file" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" type="file">
              <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-4">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div> 

  </div>
  <div class="flex w-6/12 justify-center">
    <img src="img/bumi 1.png" alt="bumi">
  </div>
</div>
<div class="flex w-full h-auto p-10 mx-4 justify-evenly items-center">
  <div class="bg-[#B0DEDA] w-1/5 h-auto flex rounded-md p-10 justify-center items-center flex-col">
    <div class="flex text-center justify-center items-center font-bold text-2xl text-[#00534B] mb-3">Pelaporan Cepat dan Mudah</div>
    <div class="text-[#00534B]"">Laporkan insiden polusi dengan langkah sederhana, unggah foto, video, dan lokasi.</div>
  </div>
  <div class="bg-[#B0DEDA] w-1/5 h-auto flex rounded-md p-10 justify-center items-center flex-col">
    <div class="flex text-center justify-center items-center font-bold text-2xl text-[#00534B] mb-3">Pelaporan Cepat dan Mudah</div>
    <div class="text-[#00534B]"">Laporkan insiden polusi dengan langkah sederhana, unggah foto, video, dan lokasi.</div>
  </div>
  <div class="bg-[#B0DEDA] w-1/5 h-auto flex rounded-md p-10 justify-center items-center flex-col">
    <div class="flex text-center justify-center items-center font-bold text-2xl text-[#00534B] mb-3">Pelaporan Cepat dan Mudah</div>
    <div class="text-[#00534B]"">Laporkan insiden polusi dengan langkah sederhana, unggah foto, video, dan lokasi.</div>
  </div>
</div>
<div class="flex justify-center items-center text-6xl font-bold mb-4">Tentang Kami</div>
<div class="flex w-full h-auto p-5">
  <div class="flex w-1/2 h-auto justify-center items-center">
    <img src="img/siram.png" class="flex ">
  </div>
  <div class="w-1/2 flex h-auto flex-col justify-center ">
    <div class="flex text-[#00534B] font-semibold text-xl">Apa itu Green Guard?</div>
    <div class="flex text-justify text-[#00534B] my-3">Green Guard adalah platform pengaduan pencemaran lingkungan yang memudahkan masyarakat melaporkan berbagai bentuk pencemaran dengan cepat dan mudah. Kami berkomitmen untuk menjaga kelestarian alam dan menciptakan lingkungan yang lebih bersih dan sehat bagi generasi mendatang. Melalui Green Guard, setiap individu dapat berkontribusi langsung dalam pelestarian alam dengan mengirimkan laporan beserta bukti.</div>
    <div class="flex my-3 semibold text-xl text-[#00534B]">Bagaimana Melapor di Green Guard?</div>
    <div class="flex text-justify text-[#00534B]">Kami menyediakan fitur pengaduan berupa form, dimana nanti Anda dapat mengisi form tersebut mengenai lokasi kejadian (provinsi, kota, alamat) dan opsi untuk menyertakan  video/foto sebagai bukti pengaduan pencemaran lingkungan.</div>
  </div>
</div>

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


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>

    </body>
</html>
