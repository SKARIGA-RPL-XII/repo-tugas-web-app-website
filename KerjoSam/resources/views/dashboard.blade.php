<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Tools</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-white relative overflow-hidden">

    <!-- BACKGROUND -->
    <div
        class="
            fixed inset-0 pointer-events-none

            /* desktop */
            bg-no-repeat bg-cover bg-center

            /* tablet */
            md:bg-center

            /* mobile: background diperkecil & lebih soft */
            bg-[length:140%] sm:bg-[length:120%] md:bg-cover
        "
        style="background-image: url('{{ asset('images/bg1.png') }}');">
    </div>

    <!-- CONTENT -->
    <div class="relative z-10">

        <!-- NAVBAR -->
        <nav class="bg-white shadow px-10 py-4 flex items-center">
            <span class="text-xl font-bold">
                <span class="text-red-600">Kerjo</span>
                <span class="text-yellow-400">Sam.</span>
            </span>

            <ul class="flex gap-6 text-sm font-medium ml-auto">
            <a href="{{ route('welcome') }}" class="hover:text-red-500">HOME</a>
                <li class="cursor-pointer">ABOUT US</li>
                <li class="text-red-600 cursor-pointer">ADMIN TOOLS</li>
            </ul>
        </nav>

        <!-- MAIN -->
        <div class="max-w-4xl mx-auto px-6 py-10">

            <!-- TITLE -->
            <h1 class="text-4xl font-extrabold text-center underline mb-14">
                ADMIN TOOLS
            </h1>

            <!-- USER -->
            <h2 class="text-2xl font-bold underline mb-4">USER</h2>
            <div class="space-y-4 mb-10">

                <div class="flex justify-between items-center bg-gray-100 rounded-xl px-6 py-4 shadow">
                    <div class="flex items-center gap-3 font-semibold">
                        👤 Inad
                    </div>
                    <button class="bg-red-500 text-white text-sm px-4 py-1 rounded-full">
                        HAPUS AKUN
                    </button>
                </div>

                <div class="flex justify-between items-center bg-gray-100 rounded-xl px-6 py-4 shadow">
                    <div class="flex items-center gap-3 font-semibold">
                        👤 Wisnu
                    </div>
                    <button class="bg-red-500 text-white text-sm px-4 py-1 rounded-full">
                        HAPUS AKUN
                    </button>
                </div>

            </div>

            <!-- PERUSAHAAN -->
            <h2 class="text-2xl font-bold underline mb-4">PERUSAHAAN</h2>
            <div class="mb-10">
                <div class="flex justify-between items-center bg-gray-100 rounded-xl px-6 py-4 shadow">
                    <div class="flex items-center gap-3 font-semibold">
                        👤 PT. SAWERIA
                    </div>
                    <button class="bg-red-500 text-white text-sm px-4 py-1 rounded-full">
                        HAPUS AKUN
                    </button>
                </div>
            </div>
            <!-- KATEGORI -->
            <h2 class="text-2xl font-bold underline mb-4">KATEGORI</h2>
            <div class="space-y-4 mb-12">

                <div class="flex justify-between items-center bg-gray-100 rounded-xl px-6 py-4 shadow">
                    <span class="font-semibold">PEMROGRAMAN</span>
                    <button class="bg-red-500 text-white p-2 rounded">
                        🗑
                    </button>
                </div>
            </div>
            <!-- TAMBAH KATEGORI -->
           <button class="flex items-center gap-2 bg-yellow-400 px-6 py-3 rounded-full font-bold shadow mx-auto">
            <span class="text-xl">+</span>
            TAMBAH KATEGORI
            </button>
        </div>
    </div>
</body>
</html>