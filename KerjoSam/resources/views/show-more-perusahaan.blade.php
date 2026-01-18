<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Show More Pekerjaan | KerjoSam</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .bg-about {
            background-image: url('/images/about/Overlay1.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        * {
            scrollbar-width: none;
            -ms-overflow-style: none;
        }
        *::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800 overflow-x-hidden">

    <!-- ================= NAVBAR ================= -->
    <nav class="w-full bg-white border-b shadow-sm relative z-20">
        <div class="w-full px-8 py-4 flex items-center justify-between">

            <!-- LOGO (KIRI MENTOK) -->
            <div class="flex items-center gap-3">
                <img src="/images/LogoWeb.png" alt="Logo" class="w-12 h-12 md:w-32 md:h-10 rounded-full object-cover" />
            </div>

            <!-- MENU + ADMIN (KANAN MENTOK) -->
            <div class="flex items-center gap-10">

                <!-- MENU -->
                <ul class="hidden md:flex items-center gap-10 text-sm font-medium text-gray-800">
                    <li>
                        <a href="/dashboard" class="hover:text-red-500 transition">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="hover:text-red-500 transition">
                            About us
                        </a>
                    </li>
                    <li>
                        <a href="/admin/tools" class="hover:text-red-500 transition">
                            Admin Tools
                        </a>
                    </li>
                </ul>

                <!-- USER ADMIN -->
                <div class="relative flex items-center gap-3 cursor-pointer">
                    <!-- Avatar -->
                    <div class="w-9 h-9 rounded-full bg-gray-300 flex items-center justify-center">
                        <span class="text-sm font-semibold text-gray-700">A</span>
                    </div>

                    <span class="text-sm text-gray-800">Admin</span>

                    <svg class="w-4 h-4 text-gray-600"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M19 9l-7 7-7-7" />
                    </svg>
                </div>

            </div>

        </div>
    </nav>
    <!-- ================= HERO / BACKGROUND ================= -->
    <section class="bg-about min-h-screen pt-24 pb-20">
    <div class="max-w-7xl mx-auto px-4 md:px-8">

        <h1 class="text-4xl md:text-6xl font-bold text-center mb-16 uppercase underline">
            PERUSAHAAN
        </h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-y-12 place-items-center">

            <!-- CARD -->
            <div class="w-full md:w-[500px] h-[110px] bg-white
                        rounded-[26px]
                        shadow-[2px_5px_4px_4px_rgba(0,0,0,0.25)]
                        px-6 md:px-8 py-4
                        flex flex-col justify-center
                        md:-translate-x-4">

                <h3 class="text-[22px] text-black">PT. Saweria</h3>

                <button class="mt-3 w-[80px] h-[34px]
                               bg-[#DE3C3C]
                               rounded-[17px]
                               text-white text-[16px]">
                    HAPUS
                </button>
            </div>

            <div class="w-full md:w-[500px] h-[110px] bg-white
                        rounded-[26px]
                        shadow-[2px_5px_4px_4px_rgba(0,0,0,0.25)]
                        px-6 md:px-8 py-4
                        flex flex-col justify-center
                        md:translate-x-4">

                <h3 class="text-[22px] text-black">PT. Matahari</h3>

                <button class="mt-3 w-[80px] h-[34px]
                               bg-[#DE3C3C]
                               rounded-[17px]
                               text-white text-[16px]">
                    HAPUS
                </button>
            </div>

            <div class="w-full md:w-[500px] h-[110px] bg-white
                        rounded-[26px]
                        shadow-[2px_5px_4px_4px_rgba(0,0,0,0.25)]
                        px-6 md:px-8 py-4
                        flex flex-col justify-center
                        md:-translate-x-4">

                <h3 class="text-[22px] text-black">CV. Cahaya</h3>

                <button class="mt-3 w-[80px] h-[34px]
                               bg-[#DE3C3C]
                               rounded-[17px]
                               text-white text-[16px]">
                    HAPUS
                </button>
            </div>

            <div class="w-full md:w-[500px] h-[110px] bg-white
                        rounded-[26px]
                        shadow-[2px_5px_4px_4px_rgba(0,0,0,0.25)]
                        px-6 md:px-8 py-4
                        flex flex-col justify-center
                        md:translate-x-4">

                <h3 class="text-[22px] text-black">CV. Mandiri</h3>

                <button class="mt-3 w-[80px] h-[34px]
                               bg-[#DE3C3C]
                               rounded-[17px]
                               text-white text-[16px]">
                    HAPUS
                </button>
            </div>

            <div class="w-full md:w-[500px] h-[110px] bg-white
                        rounded-[26px]
                        shadow-[2px_5px_4px_4px_rgba(0,0,0,0.25)]
                        px-6 md:px-8 py-4
                        flex flex-col justify-center
                        md:-translate-x-4">

                <h3 class="text-[22px] text-black">PT.Bunga</h3>

                <button class="mt-3 w-[80px] h-[34px]
                               bg-[#DE3C3C]
                               rounded-[17px]
                               text-white text-[16px]">
                    HAPUS
                </button>
            </div>

            <div class="w-full md:w-[500px] h-[110px] bg-white
                        rounded-[26px]
                        shadow-[2px_5px_4px_4px_rgba(0,0,0,0.25)]
                        px-6 md:px-8 py-4
                        flex flex-col justify-center
                        md:translate-x-4">

                <h3 class="text-[22px] text-black">CV.Bulan</h3>

                <button class="mt-3 w-[80px] h-[34px]
                               bg-[#DE3C3C]
                               rounded-[17px]
                               text-white text-[16px]">
                    HAPUS
                </button>
            </div>
        </div>
    </div>
</section>

    <!-- ================= FOOTER ================= -->
    <footer class="bg-white border-t">
    <!-- HERO FOOTER -->
    <div class="relative w-full h-40 md:h-56">
        <img src="/images/about/Overlay6.png"
             class="absolute inset-0 w-full h-full object-cover"
             style="object-position: center 20%;">

        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-red-600/40 to-transparent"></div>

        <!-- CONTENT -->
        <div class="absolute inset-0
                    flex flex-col md:flex-row
                    items-center md:items-center
                    justify-center md:justify-between
                    px-4 md:px-20
                    text-white
                    text-center md:text-left
                    gap-4 md:gap-0">

            <div>
                <h2 class="text-2xl md:text-4xl font-bold mb-2">
                    Kita ada Untuk Kalian
                </h2>
                <p class="text-sm md:text-lg">
                    Ayo Mulai Golek Kerjo Rek!, Cek Ndang Rabi
                </p>
            </div>

            <a href="/jobs"
               class="bg-red-600 hover:bg-red-700 transition
                      px-6 md:px-10 py-3
                      rounded-xl font-semibold text-white">
                Cari Kerja !
            </a>
        </div>
    </div>

    <!-- FOOTER CONTENT -->
    <div class="w-full px-6 md:px-16 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center md:text-left">

            <!-- LOGO -->
            <div>
                <div class="mb-4 flex flex-col md:flex-row items-center md:items-start gap-3">
                    <img src="/images/LogoWeb.png"
                         class="w-12 h-12 md:w-32 md:h-10 rounded-full object-cover" />
                </div>

                <p class="text-base text-gray-600 font-medium">
                    Kerjo Bareng, Sukses Bareng
                </p>
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

                    <div class="flex items-center justify-center md:justify-start gap-3">
                        <div class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M3 5a2 2 0 012-2h3.28a1 1 0 01.95.69l1.5 4.49a1 1 0 01-.5 1.21l-2.26 1.13a11.04 11.04 0 005.52 5.52l1.13-2.26a1 1 0 011.21-.5l4.49 1.5a1 1 0 01.69.95V19a2 2 0 01-2 2h-1C9.72 21 3 14.28 3 6V5z"/>
                            </svg>
                        </div>
                        <span>+52946747</span>
                    </div>

                    <div class="flex items-center justify-center md:justify-start gap-3">
                        <div class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8m-16 11h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <span>kerjosam@kerjo.id</span>
                    </div>

                </div>
            </div>

        </div>
    </div>
</footer>
    <!-- ================= SCRIPT SHOW MORE ================= -->
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