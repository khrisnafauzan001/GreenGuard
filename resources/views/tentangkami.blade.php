<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Guard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body class="bg-green-50 font-sans">
    <!-- Navbar -->
    <nav class="bg-green-100 py-4 sticky top-0">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <img src="assets/logo-greenguard.png" alt="Green Guard Logo" class="h-10 mr-4">
            </div>
            <ul class="flex space-x-8 text-green-700">
                <li><a href="#beranda" class="hover:text-green-900">Beranda</a></li>
                <li><a href="#pengaduan" class="hover:text-green-900">Pengaduan</a></li>
                <li><a href="#artikel" class="hover:text-green-900">Artikel</a></li>
                <li><a href="#riwayat" class="hover:text-green-900">Riwayat</a></li>
                <li><a href="#tentang-kami" class="hover:text-green-900">Tentang Kami</a></li>
            </ul>
        </div>
    </nav>

    <!-- Tentang Kami Section -->
    <section id="tentang-kami" class="py-16 px-8">
        <div class="container mx-auto text-center"> 
            <h1 class="text-4xl font-bold text-green-900">Tentang Kami</h1>
        </div>
        <div class="container mx-auto flex flex-col md:flex-row items-center md:items-start text-center md:text-left">
            <img src="assets/big-logo-greenguard.png" alt="Green Guard Logo" class="mx-auto mb-8 mr-20 mt-0 w-80">
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
                    <img src="assets/tentang-kami.png" alt="Khrisna Fauzan Maulana" class="w-full h-48 object-cover rounded-t-lg mb-4">
                    <h3 class="text-xl font-bold text-green-900 mb-2">Khrisna Fauzan Maulana</h3>
                    <p class="text-green-700">Backend Developer</p>
                    <p class="text-green-600 text-sm">FEBE</p>
                </div>
                <!-- Member 2 -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <img src="assets/tentang-kami.png" alt="Laita Zidan" class="w-full h-48 object-cover rounded-t-lg mb-4">
                    <h3 class="text-xl font-bold text-green-900 mb-2">Laita Zidan</h3>
                    <p class="text-green-700">Front-End Developer</p>
                    <p class="text-green-600 text-sm">FEBE</p>
                </div>
                <!-- Member 3 -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <img src="assets/tentang-kami.png" alt="Putri Nur Rahmah" class="w-full h-48 object-cover rounded-t-lg mb-4">
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
                    <img src="assets/white-logo.png" class="w-36 mb-4" alt="Green Guard Logo" />
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
