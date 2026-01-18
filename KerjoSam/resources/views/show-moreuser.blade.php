<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin - Show More User</title>
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
        <li>Home</li>
        <li>About Us</li>
        <li class="text-red-600">Admin Tools</li>
        <li>Admin ▾</li>
    </ul>
</nav>

<!-- CONTENT -->
<div class="max-w-7xl mx-auto px-6 pt-32 pb-24">

    <h1 class="text-3xl font-bold text-center mb-16 underline">
        USER
    </h1>

    <!-- GRID USER -->
    <div class="grid grid-cols-2 gap-8">

        <!-- CARD -->
        <div class="bg-white px-8 py-6 rounded-xl shadow">
            <p class="font-medium">Inad</p>
            <button class="mt-3 bg-red-500 text-white text-xs px-5 py-1.5 rounded-full">
                HAPUS
            </button>
        </div>

        <div class="bg-white px-8 py-6 rounded-xl shadow">
            <p class="font-medium">Danu</p>
            <button class="mt-3 bg-red-500 text-white text-xs px-5 py-1.5 rounded-full">
                HAPUS
            </button>
        </div>

        <div class="bg-white px-8 py-6 rounded-xl shadow">
            <p class="font-medium">Wisnu</p>
            <button class="mt-3 bg-red-500 text-white text-xs px-5 py-1.5 rounded-full">
                HAPUS
            </button>
        </div>

        <div class="bg-white px-8 py-6 rounded-xl shadow">
            <p class="font-medium">Thoriq Habil</p>
            <button class="mt-3 bg-red-500 text-white text-xs px-5 py-1.5 rounded-full">
                HAPUS
            </button>
        </div>

        <div class="bg-white px-8 py-6 rounded-xl shadow">
            <p class="font-medium">Muhammad Barakwan</p>
            <button class="mt-3 bg-red-500 text-white text-xs px-5 py-1.5 rounded-full">
                HAPUS
            </button>
        </div>

        <div class="bg-white px-8 py-6 rounded-xl shadow">
            <p class="font-medium">Daffa Alif</p>
            <button class="mt-3 bg-red-500 text-white text-xs px-5 py-1.5 rounded-full">
                HAPUS
            </button>
        </div>

    </div>

    <!-- KEMBALI -->
    <div class="text-center mt-14">
        <a href="/admin/tools"
           class="text-xs underline cursor-pointer text-gray-700">
            ← Kembali ke Admin Tools
        </a>
    </div>

</div>

<!-- FOOTER BANNER -->
<div class="bg-red-700 text-white px-16 py-12 flex items-center justify-between">
    <div>
        <h2 class="text-3xl font-bold">Kita ada Untuk Kalian</h2>
        <p class="text-sm mt-2">
            Ayo Mulai Golek Kerjo Rek, Cek Ndang Rabi
        </p>
    </div>
    <button class="bg-red-500 px-8 py-3 rounded-lg font-semibold">
        Cari Kerja!
    </button>
</div>

<!-- FOOTER -->
<footer class="bg-white px-16 py-16">
    <div class="grid grid-cols-4 gap-12">

        <div>
            <h3 class="text-3xl font-bold">
                <span class="text-red-600">Kerjo</span>
                <span class="text-yellow-400">Sam.</span>
            </h3>
            <p class="text-sm text-orange-500 mt-2">
                Kerjo Bareng, Sukses Bareng
            </p>
        </div>

        <div>
            <h4 class="font-bold mb-4">Link</h4>
            <ul class="text-sm space-y-2">
                <li>Home</li>
                <li>About Us</li>
                <li>History</li>
            </ul>
        </div>

        <div>
            <h4 class="font-bold mb-4">Other</h4>
            <ul class="text-sm space-y-2">
                <li>Term & Condition</li>
                <li>Privacy Policy</li>
            </ul>
        </div>

        <div>
            <h4 class="font-bold mb-4">Our Contact</h4>
            <ul class="space-y-3 text-sm">
                <li class="bg-red-100 px-4 py-2 rounded-full w-fit">📞 +52946747</li>
                <li class="bg-red-100 px-4 py-2 rounded-full w-fit">✉ kerjosam@kerjo.id</li>
                <li class="bg-red-100 px-4 py-2 rounded-full w-fit">📷 kerjosam_</li>
                <li class="bg-red-100 px-4 py-2 rounded-full w-fit">📘 kerjosam</li>
            </ul>
        </div>

    </div>
</footer>

</body>
</html>
