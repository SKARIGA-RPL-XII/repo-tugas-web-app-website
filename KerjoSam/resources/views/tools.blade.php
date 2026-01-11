<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Tools</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gradient-to-b from-pink-100 via-red-200 to-red-700">

    <!-- NAVBAR -->
    <nav class="bg-white shadow-sm px-10 py-4 flex items-center gap-10">
        <span class="text-red-600 font-bold text-xl">KerjoSam.</span>
        <ul class="flex gap-6 text-sm font-medium">
            <li>HOME</li>
            <li>ABOUT US</li>
            <li class="text-red-600">ADMIN TOOLS</li>
        </ul>
    </nav>
    <div class="max-w-4xl mx-auto px-6 py-10">

        <!-- TITLE -->
        <h1 class="text-4xl font-extrabold text-center underline mb-12">
            ADMIN TOOLS
        </h1>

        <!-- USER -->
        <h2 class="text-2xl font-bold underline mb-4">USER</h2>
        <div class="space-y-4 mb-10">
            <div class="flex justify-between items-center bg-yellow-400 rounded-xl px-6 py-4">
                <div class="flex items-center gap-3 font-semibold">
                    👤 Dani
                </div>
                <button class="bg-red-500 text-white px-5 py-1 rounded-full font-semibold">
                    HAPUS AKUN
                </button>
            </div>
            <div class="flex justify-between items-center bg-yellow-400 rounded-xl px-6 py-4">
                <div class="flex items-center gap-3 font-semibold">
                    👤 Wisnu
                </div>
                <button class="bg-red-500 text-white px-5 py-1 rounded-full font-semibold">
                    HAPUS AKUN
                </button>
            </div>
        </div>

        <!-- PERUSAHAAN -->
        <h2 class="text-2xl font-bold underline mb-4">PERUSAHAAN</h2>
        <div class="mb-10">
            <div class="flex justify-between items-center bg-yellow-400 rounded-xl px-6 py-4">
                <div class="flex items-center gap-3 font-semibold">
                    👤 PT. SAWERIA
                </div>
                <button class="bg-red-500 text-white px-5 py-1 rounded-full font-semibold">
                    HAPUS AKUN
                </button>
            </div>
        </div>

        <!-- KATEGORI -->
        <h2 class="text-2xl font-bold underline mb-6">KATEGORI</h2>
        <div class="flex gap-6 flex-wrap">
            <div class="bg-yellow-400 rounded-full px-8 py-4 text-center">
                <p class="font-bold mb-1">PEMROGRAMAN</p>
                <button class="bg-red-500 text-white px-4 py-1 rounded-full text-sm">
                    HAPUS
                </button>
            </div>
            <div class="bg-yellow-400 rounded-full px-8 py-4 text-center">
                <p class="font-bold mb-1">INPUT DATA</p>
                <button class="bg-red-500 text-white px-4 py-1 rounded-full text-sm">
                    HAPUS
                </button>
            </div>
            <div class="bg-yellow-400 rounded-full px-8 py-4 flex items-center gap-3 font-bold cursor-pointer">
                <span class="text-2xl">+</span>
                TAMBAH KATEGORI
            </div>
        </div>
    </div>
</body>
</html>
