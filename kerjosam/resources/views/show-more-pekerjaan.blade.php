<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Show More Pekerjaan | KerjoSam</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* === BACKGROUND SAMA SEPERTI ABOUT US === */
        .bg-about {
            background-image: url('/images/about/Overlay1.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .bg-about-section {
            background-image: url('/images/about/Overlay2.png');
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

        .bg-image-position {
            object-position: center 15%;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800 antialiased overflow-x-hidden">

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
    <section class="bg-about min-h-screen pt-32 pb-20">
        <div class="max-w-6xl mx-auto px-6">

            <h1 class="text-5xl md:text-6xl font-normal text-center text-black-500 mb-20 uppercase underline">
                PEKERJAAN
            </h1>

            <!-- JOB LIST -->
            <div id="jobList" class="grid grid-cols-1 md:grid-cols-2 gap-12">

                <!-- CARD -->
                <div class="job-card hidden bg-white rounded-3xl shadow-xl overflow-hidden">
                    <img src="/images/job.jpg" class="h-44 w-full object-cover">

                    <div class="p-6">
                        <h3 class="font-bold text-lg mb-3">Copy Writing Artikel</h3>

                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-4 py-1 text-sm border border-red-500 text-red-500 rounded-full">
                                Copy Writing
                            </span>
                            <span class="px-4 py-1 text-sm border border-red-500 text-red-500 rounded-full">
                                Artikel
                            </span>
                        </div>

                        <div class="flex justify-end">
                            <button class="bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition">
                                HAPUS
                            </button>
                        </div>
                    </div>
                </div>

                <div class="job-card hidden bg-white rounded-3xl shadow-xl overflow-hidden">
                    <img src="/images/job.jpg" class="h-44 w-full object-cover">

                    <div class="p-6">
                        <h3 class="font-bold text-lg mb-3">Heuristic Evaluation Aplikasi Jurnal</h3>

                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-4 py-1 text-sm border border-red-500 text-red-500 rounded-full">UI/UX</span>
                            <span class="px-4 py-1 text-sm border border-red-500 text-red-500 rounded-full">Testing</span>
                        </div>

                        <div class="flex justify-end">
                            <button class="bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition">
                                HAPUS
                            </button>
                        </div>
                    </div>
                </div>

                <div class="job-card hidden bg-white rounded-3xl shadow-xl overflow-hidden">
                    <img src="/images/job.jpg" class="h-44 w-full object-cover">

                    <div class="p-6">
                        <h3 class="font-bold text-lg mb-3">Maintenance Website SPMB</h3>

                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-4 py-1 text-sm border border-red-500 text-red-500 rounded-full">
                                Web Development
                            </span>
                             <span class="px-4 py-1 text-sm border border-red-500 text-red-500 rounded-full">
                                Website
                            </span>
                        </div>

                        <div class="flex justify-end">
                            <button class="bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition">
                                HAPUS
                            </button>
                        </div>
                    </div>
                </div>

                <div class="job-card hidden bg-white rounded-3xl shadow-xl overflow-hidden">
                    <img src="/images/job.jpg" class="h-44 w-full object-cover">

                    <div class="p-6">
                        <h3 class="font-bold text-lg mb-3">UAT Website</h3>

                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-4 py-1 text-sm border border-red-500 text-red-500 rounded-full">
                                Testing
                            </span>
                        </div>

                        <div class="flex justify-end">
                            <button class="bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition">
                                HAPUS
                            </button>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ================= CTA (SAMA SEPERTI ABOUT) ================= -->
    <section class="relative overflow-hidden">
        <img src="/images/about/Overlay6.png" alt="" class="absolute inset-0 w-full h-full object-cover bg-image-position">
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-red-600/40 to-transparent"></div>

        <div class="relative z-10 w-full px-6 md:px-16 py-12 md:py-16 flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="text-white text-center md:text-left">
                <h2 class="text-3xl md:text-4xl font-bold mb-2">Kita ada Untuk Kalian</h2>
                <p class="text-lg text-white/90">Ayo Mulai Golek Kerjo Rek!, Cek Ndang Rabi</p>
            </div>

            <a href="/dashboard" class="bg-white text-red-600 font-semibold px-8 py-4 rounded-2xl hover:bg-red-50 transition">
                Cari Kerja !
            </a>
        </div>
    </section>

    <!-- ================= FOOTER (SAMA PERSIS ABOUT US) ================= -->
    <footer class="bg-white border-t">
        <div class="w-full px-8 md:px-16 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

                <!-- LOGO -->
                <div>
                    <div class="mb-4">
                        <div class="flex items-center gap-3">
                            <img src="/images/LogoWeb.png" alt="Logo" class="w-12 h-12 md:w-32 md:h-10 rounded-full object-cover" />
                        </div>

                        <p class="text-base text-gray-600 font-medium">Kerjo Bareng, Sukses Bareng</p>
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

                <!-- KONTAK KAMI -->
                <div>
                    <h3 class="font-semibold mb-4 text-gray-800">Kontak Kami</h3>

                    <div class="space-y-3 text-sm text-gray-600">

                        <!-- TELEPON -->
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.95.69l1.5 4.49a1 1 0 01-.5 1.21l-2.26 1.13a11.04 11.04 0 005.52 5.52l1.13-2.26a1 1 0 011.21-.5l4.49 1.5a1 1 0 01.69.95V19a2 2 0 01-2 2h-1C9.72 21 3 14.28 3 6V5z" />
                                </svg>
                            </div>
                            <span>+52946747</span>
                        </div>

                        <!-- EMAIL -->
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8m-16 11h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <span>kerjosam@kerjo.id</span>
                        </div>

                        <!-- INSTAGRAM -->
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-red-500" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M7 2C4.24 2 2 4.24 2 7v10c0 2.76 2.24 5 5 5h10c2.76 0 5-2.24 5-5V7c0-2.76-2.24-5-5-5H7zm10 2a3 3 0 013 3v10a3 3 0 01-3 3H7a3 3 0 01-3-3V7a3 3 0 013-3h10zm-5 3a5 5 0 100 10 5 5 0 000-10zm0 2a3 3 0 110 6 3 3 0 010-6zm4.5-.75a1.25 1.25 0 100 2.5 1.25 1.25 0 000-2.5z" />
                                </svg>
                            </div>
                            <span>@kerjosam_.</span>
                        </div>

                        <!-- FACEBOOK -->
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-red-500" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M22 12a10 10 0 10-11.5 9.87v-6.99h-2.3V12h2.3V9.8c0-2.28 1.36-3.54 3.44-3.54.99 0 2.03.18 2.03.18v2.24h-1.14c-1.12 0-1.47.7-1.47 1.41V12h2.5l-.4 2.88h-2.1v6.99A10 10 0 0022 12z" />
                                </svg>
                            </div>
                            <span>kerjosam</span>
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