<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Admin Tools</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-white relative overflow-x-hidden">

    <!-- BACKGROUND -->
    <div class="absolute inset-0 -z-10 bg-no-repeat bg-cover bg-center" style="background-image: url('/images/Group 36.png');">
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
                <button class="bg-red-500 text-white text-xs px-4 py-1 rounded-full">
                    HAPUS
                </button>
            </div>

            <div class="flex justify-between bg-white px-6 py-3 rounded-xl shadow">
                <span>PT. Matahari</span>
                <button class="bg-red-500 text-white text-xs px-4 py-1 rounded-full">
                    HAPUS
                </button>
            </div>

            <div class="flex justify-between bg-white px-6 py-3 rounded-xl shadow">
                <span>CV. Cahaya</span>
                <button class="bg-red-500 text-white text-xs px-4 py-1 rounded-full">
                    HAPUS
                </button>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('show-more-perusahaan') }}"
                class="text-sm underline cursor-pointer font-semibold">
                SHOW MORE
            </a>
        </div>


        <!-- PEKERJAAN -->
        <h2 class="text-xl font-bold mt-14 mb-6">PEKERJAAN</h2>

        <!-- CARD LIST -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

            <!-- CARD 1 -->
            <a href="{{ route('show.more.pekerjaan') }}"
                class="bg-white rounded-3xl shadow-xl overflow-hidden hover:scale-[1.02] transition">
                <img src="/images/job.jpg" class="h-44 w-full object-cover">
                <div class="p-6">
                    <h3 class="font-bold text-lg mb-4">Copy Writing Artikel</h3>
                    <div class="flex items-center justify-between">
                        <div class="flex gap-2">
                            <span class="px-4 py-1 text-xs border border-red-500 text-red-500 rounded-full">
                                Copy Writing
                            </span>
                            <span class="px-4 py-1 text-xs border border-red-500 text-red-500 rounded-full">
                                Artikel
                            </span>
                        </div>
                        <span class="bg-red-500 text-white px-6 py-2 rounded-full text-sm font-semibold">
                            HAPUS
                        </span>
                    </div>
                </div>
            </a>

            <!-- CARD 2 -->
            <a href="{{ route('show.more.pekerjaan') }}"
                class="bg-white rounded-3xl shadow-xl overflow-hidden hover:scale-[1.02] transition">
                <img src="/images/job.jpg" class="h-44 w-full object-cover">
                <div class="p-6">
                    <h3 class="font-bold text-lg mb-4">Heuristic Evaluation Aplikasi Jurnal</h3>
                    <div class="flex items-center justify-between">
                        <div class="flex gap-2">
                            <span class="px-4 py-1 text-xs border border-red-500 text-red-500 rounded-full">
                                UI/UX
                            </span>
                            <span class="px-4 py-1 text-xs border border-red-500 text-red-500 rounded-full">
                                Testing
                            </span>
                        </div>
                        <span class="bg-red-500 text-white px-6 py-2 rounded-full text-sm font-semibold">
                            HAPUS
                        </span>
                    </div>
                </div>
            </a>

            <!-- CARD 3 -->
            <a href="{{ route('show.more.pekerjaan') }}"
                class="bg-white rounded-3xl shadow-xl overflow-hidden hover:scale-[1.02] transition">
                <img src="/images/job.jpg" class="h-44 w-full object-cover">
                <div class="p-6">
                    <h3 class="font-bold text-lg mb-4">Maintenance Website SPMB</h3>
                    <div class="flex items-center justify-between">
                        <div class="flex gap-2">
                            <span class="px-4 py-1 text-xs border border-red-500 text-red-500 rounded-full">
                                Web Development
                            </span>
                            <span class="px-4 py-1 text-xs border border-red-500 text-red-500 rounded-full">
                                Website
                            </span>
                        </div>
                        <span class="bg-red-500 text-white px-6 py-2 rounded-full text-sm font-semibold">
                            HAPUS
                        </span>
                    </div>
                </div>
            </a>

            <!-- CARD 4 -->
            <a href="{{ route('show.more.pekerjaan') }}"
                class="bg-white rounded-3xl shadow-xl overflow-hidden hover:scale-[1.02] transition">
                <img src="/images/job.jpg" class="h-44 w-full object-cover">
                <div class="p-6">
                    <h3 class="font-bold text-lg mb-4">UAT Website</h3>
                    <div class="flex items-center justify-between">
                        <div class="flex gap-2">
                            <span class="px-4 py-1 text-xs border border-red-500 text-red-500 rounded-full">
                                Testing
                            </span>
                        </div>
                        <span class="bg-red-500 text-white px-6 py-2 rounded-full text-sm font-semibold">
                            HAPUS
                        </span>
                    </div>
                </div>
            </a>

        </div>

        <!-- SHOW MORE (TEXT ONLY) -->
        <div class="flex justify-center mt-8">
            <a href="{{ route('show.more.pekerjaan') }}"
                class="text-sm underline cursor-pointer">
                SHOW MORE
            </a>
        </div>

    </div>
    <!-- KATEGORI -->
    <div class="ml-8 mb-16">
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

    </div>

    <!-- FOOTER BANNER -->
    <footer class="bg-white border-t">
        <!-- FOOTER BANNER -->
        <div class="relative w-full h-48 md:h-64">
            <img src="/images/about/Overlay6.png" alt="" class="absolute inset-0 w-full h-full object-cover" style="object-position: center 20%;">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-red-600/40 to-transparent"></div>
            <!-- CONTENT -->
            <div class="absolute inset-0 flex items-center justify-between px-8 md:px-20 text-white">
                <div>
                    <h2 class="text-2xl md:text-4xl font-bold mb-2">
                        Kita ada Untuk Kalian
                    </h2>
                    <p class="text-sm md:text-lg">
                        Ayo Mulai Golek Kerjo Rek!, Cek Ndang Rabi
                    </p>
                </div>

                <a href="/jobs"
                    class="bg-red-600 hover:bg-red-700 transition px-6 md:px-10 py-3 rounded-xl font-semibold">
                    Cari Kerja !
                </a>
            </div>
        </div>

        <!-- FOOTER CONTENT -->
        <div class="w-full px-8 md:px-16 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

                <!-- LOGO -->
                <div>
                    <div class="mb-4">
                        <div class="flex items-center gap-3">
                            <img src="/images/LogoWeb.png"
                                alt="Logo"
                                class="w-12 h-12 md:w-32 md:h-10 rounded-full object-cover" />
                        </div>
                        <p class="text-base text-gray-600 font-medium">
                            Kerjo Bareng, Sukses Bareng
                        </p>
                    </div>
                </div>

                <!-- NAVIGASI -->
                <div>
                    <h3 class="font-semibold mb-4 text-gray-800">Navigasi</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li><a href="/dashboard" class="hover:text-red-500">Home</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-red-500">About</a></li>
                        <li><a href="{{ route('history') }}" class="hover:text-red-500">History</a></li>
                    </ul>
                </div>

                <!-- OTHER -->
                <div>
                    <h3 class="font-semibold mb-4 text-gray-800">Other</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li>Terms & Conditions</li>
                        <li>Privacy Policy</li>
                    </ul>
                </div>

                <!-- KONTAK -->
                <div>
                    <h3 class="font-semibold mb-4 text-gray-800">Kontak Kami</h3>

                    <div class="space-y-3 text-sm text-gray-600">

                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center">
                                📞
                            </div>
                            <span>+52946747</span>
                        </div>

                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center">
                                📧
                            </div>
                            <span>kerjosam@kerjo.id</span>
                        </div>

                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center">
                                📷
                            </div>
                            <span>@kerjosam_.</span>
                        </div>

                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center">
                                📘
                            </div>
                            <span>kerjosam</span>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </footer>
    <script>
        const cards = document.querySelectorAll('.job-card');
        const btn = document.getElementById('showMoreBtn');
        let visible = 4;

        function showCards() {
            for (let i = 0; i < visible; i++) {
                if (cards[i]) cards[i].classList.remove('hidden');
            }
        }

        showCards();

        btn.addEventListener('click', () => {
            visible += 2;
            showCards();
            if (visible >= cards.length) btn.style.display = 'none';
        });
    </script>
</body>

</html>