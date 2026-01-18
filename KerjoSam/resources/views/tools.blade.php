<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Tools</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-white relative overflow-x-hidden">

<!-- BACKGROUND -->
<div class="absolute inset-0 -z-10 bg-no-repeat bg-cover bg-center"
     style="background-image: url('{{ asset('images/Group 36.png') }}');">
</div>

<!-- NAVBAR -->
<nav class="fixed top-0 left-0 w-full bg-white shadow px-12 py-4 flex items-center z-50">
    <span class="text-xl font-bold">
        <span class="text-red-600">Kerjo</span>
        <span class="text-yellow-400">Sam.</span>
    </span>

    <ul class="flex gap-8 text-sm font-medium ml-auto">
        <li><a href="{{ route('welcome') }}" class="hover:text-red-600 cursor-pointer">Home</a></li>
        <li><a href="{{ route('about') }}" class="hover:text-red-600 cursor-pointer">About Us</a></li>
        <li class="text-red-600">Admin Tools</li>
    </ul>
</nav>

<!-- MAIN -->
<div class="max-w-6xl mx-auto px-10 pt-32 pb-20">

    <h1 class="text-4xl font-bold text-center mb-16">ADMIN TOOLS</h1>

    <!-- USER -->
    <h2 class="text-xl font-bold mb-4">USER</h2>
    <div class="space-y-3">
        <div class="flex justify-between bg-white px-6 py-3 rounded-xl shadow">
            <span>Inad</span>
            <button class="bg-red-500 text-white text-xs px-4 py-1 rounded-full">HAPUS</button>
        </div>
        <div class="flex justify-between bg-white px-6 py-3 rounded-xl shadow border-2 border-blue-400">
            <span>Danu</span>
            <button class="bg-red-500 text-white text-xs px-4 py-1 rounded-full">HAPUS</button>
        </div>
        <div class="flex justify-between bg-white px-6 py-3 rounded-xl shadow">
            <span>Wisnu</span>
            <button class="bg-red-500 text-white text-xs px-4 py-1 rounded-full">HAPUS</button>
        </div>
    </div>

    <p class="text-center text-sm mt-4 underline cursor-pointer">SHOW MORE</p>

    <!-- PERUSAHAAN -->
    <h2 class="text-xl font-bold mt-14 mb-4">PERUSAHAAN</h2>
    <div class="space-y-3">
        <div class="flex justify-between bg-white px-6 py-3 rounded-xl shadow">
            <span>PT Saveria</span>
            <button class="bg-red-500 text-white text-xs px-4 py-1 rounded-full">HAPUS</button>
        </div>
        <div class="flex justify-between bg-white px-6 py-3 rounded-xl shadow">
            <span>PT. Matahari</span>
            <button class="bg-red-500 text-white text-xs px-4 py-1 rounded-full">HAPUS</button>
        </div>
        <div class="flex justify-between bg-white px-6 py-3 rounded-xl shadow">
            <span>CV. Cahaya</span>
            <button class="bg-red-500 text-white text-xs px-4 py-1 rounded-full">HAPUS</button>
        </div>
    </div>

    <p class="text-center text-sm mt-4 underline cursor-pointer">SHOW MORE</p>

    <!-- PEKERJAAN -->
    <h2 class="text-xl font-bold mt-14 mb-6">PEKERJAAN</h2>

    <div class="grid grid-cols-2 gap-8">
        <!-- CARD -->
        <div class="bg-white rounded-2xl shadow overflow-hidden">
            <img src="{{ asset('images/job1.jpg') }}" class="w-full h-40 object-cover">
            <div class="p-4">
                <h3 class="font-semibold text-sm">Copy Writing Artikel</h3>
                <p class="text-xs text-gray-500">Remote · Freelance</p>
                <button class="bg-red-500 text-white text-xs px-4 py-1 rounded-full mt-3">HAPUS</button>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow overflow-hidden">
            <img src="{{ asset('images/job2.jpg') }}" class="w-full h-40 object-cover">
            <div class="p-4">
                <h3 class="font-semibold text-sm">Heuristik Evaluasi</h3>
                <p class="text-xs text-gray-500">Analisis Jurnal</p>
                <button class="bg-red-500 text-white text-xs px-4 py-1 rounded-full mt-3">HAPUS</button>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow overflow-hidden">
            <img src="{{ asset('images/job3.jpg') }}" class="w-full h-40 object-cover">
            <div class="p-4">
                <h3 class="font-semibold text-sm">Maintenance Website</h3>
                <p class="text-xs text-gray-500">SPMB</p>
                <button class="bg-red-500 text-white text-xs px-4 py-1 rounded-full mt-3">HAPUS</button>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow overflow-hidden">
            <img src="{{ asset('images/job4.jpg') }}" class="w-full h-40 object-cover">
            <div class="p-4">
                <h3 class="font-semibold text-sm">UAT Website</h3>
                <p class="text-xs text-gray-500">Testing</p>
                <button class="bg-red-500 text-white text-xs px-4 py-1 rounded-full mt-3">HAPUS</button>
            </div>
        </div>
    </div>

    <p class="text-center text-sm mt-6 underline cursor-pointer">SHOW MORE</p>

    <!-- KATEGORI -->
    <h2 class="text-xl font-bold mt-14 mb-4">KATEGORI</h2>
    <div class="flex flex-wrap gap-2 mb-6">
        <span class="bg-red-500 text-white text-xs px-3 py-1 rounded-full">Copy Writing</span>
        <span class="bg-red-500 text-white text-xs px-3 py-1 rounded-full">UI/UX</span>
        <span class="bg-red-500 text-white text-xs px-3 py-1 rounded-full">Testing</span>
        <span class="bg-red-500 text-white text-xs px-3 py-1 rounded-full">Maintenance</span>
    </div>

    <button class="bg-red-500 text-white px-6 py-2 rounded-full text-sm">
        + TAMBAH KATEGORI
    </button>

</div>

<!-- FOOTER BANNER -->
<div class="bg-red-700 text-white px-16 py-10 flex items-center justify-between">
    <div>
        <h2 class="text-2xl font-bold">Kita ada Untuk Kalian</h2>
        <p class="text-sm">Ayo Mulai Golek Kerjo Rek, Cek Ndang Rabi</p>
    </div>
    <button class="bg-red-500 px-6 py-3 rounded-lg font-semibold">
        Cari Kerja !
    </button>
</div>

<!-- FOOTER -->
<footer class="bg-white px-16 py-14">
    <div class="grid grid-cols-4 gap-10">
        <div>
            <h3 class="text-2xl font-bold">
                <span class="text-red-600">Kerjo</span>
                <span class="text-yellow-400">Sam.</span>
            </h3>
            <p class="text-sm text-gray-500">Kerjo Bareng, Sukses Bareng</p>
        </div>

        <div>
            <h4 class="font-semibold mb-3">Link</h4>
            <ul class="text-sm text-gray-500 space-y-2">
                <li>Home</li>
                <li>About Us</li>
                <li>History</li>
            </ul>
        </div>

        <div>
            <h4 class="font-semibold mb-3">Other</h4>
            <ul class="text-sm text-gray-500 space-y-2">
                <li>Terms & Condition</li>
                <li>Privacy Policy</li>
            </ul>
        </div>

       <div>
    <h4 class="font-bold mb-4">Our Contact</h4>
    <ul class="space-y-3 text-sm text-gray-700">

        <li class="flex items-center gap-3 bg-gray-100 px-4 py-2 rounded-full w-fit">
            <span>📞</span>
            <span>+62 946747</span>
        </li>

        <li class="flex items-center gap-3 bg-gray-100 px-4 py-2 rounded-full w-fit">
            <span>📧</span>
            <span>kerjosam@kerjo.id</span>
        </li>

        <li class="flex items-center gap-3 bg-gray-100 px-4 py-2 rounded-full w-fit">
            <span>📷</span>
            <span>kerjosam_</span>
        </li>

        <li class="flex items-center gap-3 bg-gray-100 px-4 py-2 rounded-full w-fit">
            <span>📘</span>
            <span>kerjosam</span>
        </li>

    </ul>
</div>
    </div>
</footer>

</body>
</html>
